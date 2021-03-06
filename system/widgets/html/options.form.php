<?php

class formWidgetHtmlOptions extends cmsForm {

    public function init() {

        return array(

            array(
                'type' => 'fieldset',
                'title' => LANG_OPTIONS,
                'childs' => array(

                    new fieldHtml('options:content', array(
                        'title' => LANG_WD_HTML_CONTENT,
                        'options' => array('editor' => 'ace'),
                        'rules' => array(
                            array('required')
                        )
                    ))

                )
            )

        );

    }

}
