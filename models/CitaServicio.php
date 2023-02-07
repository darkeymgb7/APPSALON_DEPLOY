<?php

namespace Model;

class citaservicio extends ActiveRecord {
    protected static $tabla = 'citaservicio';
    protected static $columnasDB = ['id', 'citaId', 'servicioId'];

    public $id;
    public $citaId;
    public $servicioId;

    public function __construct($args = [])
    {
       $this->id = $args['id'] ?? null;
       $this->citaId = $args['citaId'] ?? '';
       $this->servicioId = $args['servicioId'] ?? ''; 
    }
}