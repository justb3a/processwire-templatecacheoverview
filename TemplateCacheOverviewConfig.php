<?php namespace ProcessWire;

/**
* Class TemplateCacheOverviewConfig
*/
class TemplateCacheOverviewConfig extends ModuleConfig {

  /**
   * array Default config values
   */
  public function getDefaults() {
    return array(
      'columns' => array('cacheStatus', 'cacheTime')
    );
  }

  /**
   * array Default config values
   */
  public function getOptions() {
    return array(
      'cacheStatus' => $this->_('Cache Status'),
      'cacheTime' => $this->_('Cache Time'),
      'useCacheForUsers' => $this->_('Cache For'),
      'noCacheGetVars' => $this->_('Excl. GET Vars'),
      'noCachePostVars' => $this->_('Excl. POST Vars'),
      'cacheExpire' => $this->_('On Page Save expire cache for ..')
    );
  }

  /**
   * Retrieves the list of config input fields
   * Implementation of the ConfigurableModule interface
   *
   * @return InputfieldWrapper
   */
  public function getInputfields() {
    // get inputfields
    $inputfields = parent::getInputfields();

    $field = $this->modules->get('InputfieldAsmSelect');
    $field->attr('name', 'columns');
    $field->label = $this->_('What columns to show in the results');
    $field->description = $this->_('Select and sort the columns that will display in the template list table.');
    $field->icon = 'table';
    $field->addOptions($this->getOptions());
    $inputfields->add($field);

    return $inputfields;
  }
}
