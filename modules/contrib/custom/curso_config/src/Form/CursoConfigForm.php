<?php
namespace Drupal\curso_config\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
//use Drupal\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\curso_module\Services\Repetir;
use Symfony\Component\DependencyInjection\ContainerInterface;

class CursoConfigForm extends ConfigFormBase {

  private $repetir;
  public function __construct(ConfigFactoryInterface $config_factory, Repetir $repetir)
  {
    parent::__construct($config_factory);
    $this->repetir = $repetir;
  }

  public static function create(ContainerInterface $container) {
    return new static (
      $container->get('config.factory'),
      $container->get('curso_module.repetir'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
	  return 'curso_config_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'curso_config.nuestra_configuracion',
    ];
  }

  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $config = $this->config('curso_config.nuestra_configuracion');


    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#default_value' => $config->get('name'),
    ];

    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#default_value' => $config->get('label'),
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    $config = $this->config('curso_config.nuestra_configuracion');

    parent::submitForm($form, $form_state);

    $config->set('name', $form_state->getValue('name'));
    $config->set('label', $form_state->getValue('label'));
    $config->save();
  }

}
