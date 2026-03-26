<?php

test('el listado de tareas se carga correctamente', function () {
  
    $response = $this->get('/listas');
    $response->assertStatus(200);
    $response->assertOk();
});