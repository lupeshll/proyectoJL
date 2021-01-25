<?php
    class ventas{
        public function obtenDatosProducto($idproducto){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="SELECT prod.nombre,
                        prod.descripcion,
                        prod.cantidad,
                        img.ruta,
                        prod.precio 
                    from producto as prod
                    inner join imagenes as img
                    on prod.id_imagen=img.id_imagen
                    and prod.id_producto='$idproducto'";
            
            $result=mysqli_query($conexion,$sql);

            $ver=mysqli_fetch_row($result);

            $d=explode('/',$ver[3]);
            $img=$d[1].'/'.$d[2].'/'.$d[3];

            $datos=array(
                'nombre'=>$ver[0],
                'descripcion'=>$ver[1],
                'cantidad'=>$ver[2],
                'ruta'=>$img,
                'precio'=>$ver[4]
            );

            return $datos;
        }

        public function crearVenta(){
            $c= new conectar();
            $conexion=$c->conexion();

            $fecha=date('Y-m-d');
            $idventa=self::creaFolio();
            $datos=$_SESSION['tablaComprasTemp'];
            $idusuario=$_SESSION['iduser'];
            //Variable de respuestas
            $r=0;

            for ($i=0; $i<count($datos); $i++) {
                $d=explode("||", $datos[$i]);

                $sql="INSERT into ventas (id_venta,
                                            id_cliente,
                                            id_producto,
                                            id_usuario,
                                            precio,
                                            fechaCompra)
                            values ('$idventa',
                                    '$d[5]',
                                    '$d[0]',
                                    '$idusuario',
                                    '$d[3]',
                                    '$fecha')";
                $r=$r + $result=mysqli_query($conexion,$sql);
            }
            return $r;
        }

        public function creaFolio(){
            $c= new conectar();
            $conexion=$c->conexion();
    
            $sql="SELECT id_venta from ventas group by id_venta desc";
    
            $resul=mysqli_query($conexion,$sql);
            $id=mysqli_fetch_row($resul)[0];
    
            if($id=="" or $id==null or $id==0){
                return 1;
            }else{
                return $id + 1;
            }
        }
        //hacer un if para el id

        public function nombreCliente($idCliente){
            $c= new conectar();
            $conexion=$c->conexion();

            if($idCliente==0){
                $sql="SELECT apellido,nombre 
                from clientes 
                where id_cliente='$idCliente'";

                $result=mysqli_query($conexion,$sql);
        
                $ver=mysqli_fetch_row($result);
        
                return " ";
            }else{
                $sql="SELECT apellido,nombre 
                from clientes 
                where id_cliente='$idCliente'";
                
                $result=mysqli_query($conexion,$sql);
        
                $ver=mysqli_fetch_row($result);
        
                return $ver[0]." ".$ver[1];
            }
    
            
        }
    
        public function obtenerTotal($idventa){
            $c= new conectar();
            $conexion=$c->conexion();
    
            $sql="SELECT precio 
                    from ventas 
                    where id_venta='$idventa'";
            $result=mysqli_query($conexion,$sql);
    
            $total=0;
    
            while($ver=mysqli_fetch_row($result)){
                $total=$total + $ver[0];
            }
    
            return $total;
        }
    }

?>