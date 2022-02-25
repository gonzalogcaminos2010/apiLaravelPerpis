<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form method="POST" enctype="multipart/form-data">



                <div class="form-group">
                    <label for="nombre">Producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">

                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del producto">

                </div>

                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio del producto">

                </div>

                <div class="form-group">
                    <label for="image">Imagen</label>
                    <input id="imagen" type="file" class="form-control" id="image" name="image" placeholder="Imagen del producto">

                </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Guardar Producto">
            </div>


            </form>


        </div>
    </div>
</div>

