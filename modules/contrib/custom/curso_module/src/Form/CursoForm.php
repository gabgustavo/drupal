<?php

namespace Drupal\curso_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

//Drupal FAPI


class CursoForm extends FormBase {

  /**
   * returns string
   */
  public function getFormId() {
    return 'curso_module_form';
  }

  /**
   * return array
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#title'] = $this->t('Formulario de curso');

    $form['nombre'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Nombre'),
      //'#default_value' => 'Luis',
      //'#size' => 60,
      //'#maxlength' => 128,
      '#description' => $this->t('Ingrese su nombre'),
      '#required' => TRUE,
    ];

    $form['apellido'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Apellido'),
      '#description' => $this->t('Ingrese su apellido'),
      '#required' => TRUE,
    ];

    $form['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Correo Electrónico'),
      '#description' => $this->t('Ingrese su correo electrónico'),
      '#required' => TRUE,
    ];

    $form['mensaje'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Mensaje'),
      '#description' => $this->t('Ingrese su mensaje'),
      '#required' => FALSE,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Enviar'),
      '#attributes' => ['class' => ['mi-boton-personalizado']],
    ];

    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('nombre')) < 3) {
      $form_state->setErrorByName('nombre', $this->t('El nombre debe tener al menos 3 caracteres.'));
    }

    if (strlen($form_state->getValue('apellido')) < 3) {
      $form_state->setErrorByName('apellido', $this->t('El apellido debe tener al menos 3 caracteres.'));
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    \Drupal::messenger()->addMessage($this->t('<br>Formulario enviado correctamente. Nombre: @nombre, Apellido: @apellido, Email: @email, Mensaje: @mensaje', [
      '@nombre' => $form_state->getValue('nombre'),
      '@apellido' => $form_state->getValue('apellido'),
      '@email' => $form_state->getValue('email'),
      '@mensaje' => $form_state->getValue('mensaje'),
    ]));
  }
}
