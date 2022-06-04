<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Empleado {
  private $nombre;
  private $sueldo;
  public function inicializar($nom,$sue)
  {
    $this->nombre=$nom;
    $this->sueldo=$sue;
  }
  public function pagaImpuestos()
  {
    echo $this->nombre;
    echo '-';
    if ($this->sueldo>3000)
      echo 'Debe pagar impuestos';
    else
      echo 'No paga impuestos';
    echo '<br>';
  }
}

$empleado1=new Empleado();
$empleado1->inicializar('jose',2600);
$empleado1->pagaImpuestos();
$empleado1=new Empleado();
$empleado1->inicializar('maria',4400);
$empleado1->pagaImpuestos();
?>
</body>
</html>