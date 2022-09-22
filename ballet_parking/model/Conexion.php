<?php
    
    
    /**
     * Conexion
     */
    class Conexion
    {
                
        /**
         * conectar
         * permite la conexion con la base de datos. 
         * @return void
         */
        public static function conectar()
        {

            try
            {

                $con = new PDO("mysql:host=localhost; dbname=ballet_parking", "root", "");

                return $con;
                
            }catch(PDOException $ex)
            {

                die($ex->getMessage());

            }

        }

    }

?>