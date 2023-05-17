<?php

class logeo
{
    private $db;

    public function __construct()
    {
        require_once 'conexion.php';
        $this->db = DBConexion::conexiondb();
    }
    public function get_user($correo, $pass)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE correo = :correo AND contraseña = :pass";
            $query = $this->db->prepare($sql);
            $query->bindValue(':correo', $correo);
            $query->bindValue(':pass', $pass);
            $query->execute();
            if ($query->fetch(PDO::FETCH_ASSOC)) {
?>
                <p class="alert win">CORRECTO usuario encontrado</p>
            <?php
            } else {
            ?>
                <p class="alert err">ERROR usuario y/o contraseña incorrecta</p>
<?php
            }
        } catch (Exception $erUser) {

            echo 'error en la conexion ';
            die('error en la linea ');
        }
    }
}
