<?php
  namespace Drupal\drupal_day\Form;
  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;
  class PersonalForm extends FormBase{
    public function  getFormId(){
      return 'personal_form';
    }
    public function buildForm(array $form, FormStateInterface $form_state){
      $form['name']=array(
        '#type'=>'textfield',
        '#title'=> t("Your name"),
        '#required'=>TRUE,
      );
      $form['cedula']=array(
          '#type'=> 'textfield',
          '#title'=> t('ID'),
          '#required'=>TRUE,
      );
      $form['email']=array(
        '#type'=> 'email',
        '#title'=>t('Mail'),
        '#required'=> TRUE,
      );
      $form['actions']['#type']='actions';
      $form['actions']['submit']=array(
        '#type'=>'submit',
        '#value'=>t('send'),
         '#button_type'=> 'primary',
      );
      return $form;
    }
    public function submitForm(array &$form, FormStateInterface $form_state) {
      foreach ($form_state->getValues() as $key => $value) {
        drupal_set_message($key.'  -- '.$value);
      }
    }
    public function validateForm(array &$form, FormStateInterface $form_state) {
      if(strlen($form_state->getValue('cedula'))<10){
        $form_state->setErrorbyName('cedula', $this->t('the ID is too short'));
      }
    }
  }
  