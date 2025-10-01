<?php

namespace Drupal\curso_db\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DbController extends ControllerBase
{

  /**
   * @var Connection
   */
  private $db;

  public function __construct(Connection $database)
  {
    $this->db = $database;
  }

  public static function create(ContainerInterface $container)
  {
    return new static(
      $container->get('database')
    );
  }

  public function queryEstatica() {
    /*$this->db->query(
      "INSERT INTO {curso_db} (name, value, nid) VALUES (:name, :value, :nid)",
      [
        ':name' => 'Luis B.',
        ':value' => 'Trabajando en drupal y DB',
        ':nid' => 1,
      ]
    );

    $this->db->query(
      "INSERT INTO {curso_db} (name, value) VALUES (:name, :value)",
      [
        ':name' => 'Camilo',
        ':value' => 'Trabajando en drupal y DB sin relacion DB'
      ]
    );

    $this->db->query(
      "INSERT INTO {curso_db} (name, value) VALUES (:name, :value)",
      [
        ':name' => 'Maria',
        ':value' => 'Maria me esta ayudando en mis proyectos'
      ]
    );*/

    $data = $this->db->query(
      "SELECT * FROM {curso_db}"
    )
    ->fetchAll();

    //dd($data);

    return ['#markup' => 'Consultas a base de datos estaticas.'];
  }

  //https://www.drupal.org/docs/8/api/database-api/dynamic-queries/conditions#s-supported-operators
  public function selectDinamico() {

    $result = $this->db->select('curso_db', 'c')
    //->fields('c', ['name', 'id'])
    ->fields('c')
    //->condition('nid', 'null', 'IS NULL')
    //->condition('name', '%Luis%', 'LIKE')

    ->orderBy('c.name', 'desc');
    //Esta seria la parte dinamica 6
    $nid = null;
    if($nid) {
      $result->isNotNull('nid');
    } else {
      $result->condition('name', '%Luis%', 'LIKE');
    }

    $result->join('node', 'n', 'c.nid = n.nid');
    $result = $result
    ->fields('n')
    ->execute()
    ->fetchAll();

    dd($result);
    return ['#markup' => 'Consultas a base de datos select dinamico.'];
  }

  public function insertDinamico() {
    $values = [
      'name' => 'Margarita',
      'value' => 'Margarita esta de vacaciones',
    ];
    $this->db->insert('curso_db')
    ->fields($values)
    ->execute();

    return ['#markup' => 'Consultas a base de datos insert dinamico.'];
  }

  public function updateDinamico() {
    return ['#markup' => 'Consultas a base de datos update dinamico.'];
  }

  public function deleteDinamico() {
    return ['#markup' => 'Consultas a base de datos delete dinamico.'];
  }

  public function mergeDinamico() {
    return ['#markup' => 'Consultas a base de datos con merge.'];
  }
}
