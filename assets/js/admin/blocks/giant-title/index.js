const { __ } = wp.i18n;
const { addFilter } = wp.hooks
const { registerBlockVariation } = wp.blocks;

const GIANT_TITLE_CLASSNAME = 'is-giant-title';
const TYPOGRAPHY_SETTINGS_PANEL = '.typography-block-support-panel';
const DIMENSIONS_SETTINGS_PANEL = '.dimensions-block-support-panel';

const SETTINGS_PANEL_TO_HIDE = [
  TYPOGRAPHY_SETTINGS_PANEL,
  DIMENSIONS_SETTINGS_PANEL
]
/*
 Observe DOM Changes and run the callback
*/
const observeOnce = (callback) => {
  return new MutationObserver(function () {
    try {
      callback();
    } catch (error) {
      console.error('Fail to hide the settings', error);
    } finally {
      this.disconnect();
     }  
  }).observe(document, { attributes: false, childList: true, characterData: false, subtree: true });
}

const shouldHideSettings = (props) => {
  const isSiteTitle = props?.name === 'core/site-title';
  const isGiantTitle = props?.attributes?.className?.includes( GIANT_TITLE_CLASSNAME);

  return isSiteTitle && isGiantTitle && props?.isSelected;;
}


const hideSettingsBySelector = (settingsSelectors = []) => {
  return settingsSelectors.map(selector => {
    const panel = document.querySelector(selector);
    panel.style.display = 'none';
  });
}

const hideSettings = (settingsToHide) => (BlockEdit) => (props) => {
  if (shouldHideSettings(props))
    observeOnce(() => hideSettingsBySelector(settingsToHide));
    
    return BlockEdit(props)
}
  


function init() {
  registerBlockVariation('core/site-title', {
    name: 'course/giant-title',
    title: __('Giant Title'),
    description: __('Giant, auto scalable site title.', 'sensei-lms'),
    attributes: { className: 'is-giant-title' },
    isActive: (blockAttributes, variationAttributes) => blockAttributes?.className?.includes(variationAttributes?.className)
  });
  
  addFilter(
    'editor.BlockEdit',
    'sensei-lms/course-list-block',
    hideSettings(SETTINGS_PANEL_TO_HIDE)
  );
}

wp.domReady(init);




