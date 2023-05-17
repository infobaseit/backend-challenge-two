<?php
namespace Infobase\Grid\Block\Adminhtml\Grid\Edit;

use Magento\Backend\Block\Template\Context;
use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Framework\Data\FormFactory;
use Magento\Framework\Registry;
use Magento\Store\Model\System\Store;

class Form extends Generic
{
    protected Store $_systemStore;

    public function __construct(
        Context $context,
        Registry $registry,
        FormFactory $formFactory,
        array $data = []
    )
    {
        parent::__construct($context, $registry, $formFactory, $data);
    }

    protected function _prepareForm(): static
    {
        //$dateFormat = $this->_localeDate->getDateFormat();
        $model = $this->_coreRegistry->registry('row_data');
        $form = $this->_formFactory->create(
            [
                'data' => [
                    'id' => 'edit_form',
                    'enctype' => 'multipart/form-data',
                    'action' => $this->getData('action'),
                    'method' => 'post'
                ]
            ]
        );
        $form->setHtmlIdPrefix('smb_');
        if ($model->getKeyId()) {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Edit Access Key Data'), 'class' => 'fieldset-wide']
            );
            $fieldset->addField('key_id', 'hidden', ['name' => 'key_id']);
        } else {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Add Access Key Data'), 'class' => 'fieldset-wide']
            );
        }
        $fieldset->addField(
            'access_key',
            'text',
            [
                'name' => 'access_key',
                'label' => __('Access Key'),
                'id' => 'access_key',
                'title' => __('Access Key'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );
        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
