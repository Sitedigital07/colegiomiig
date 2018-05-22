@extends ('adminsite.auditor')
<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


@section('cabecera')
 @parent

 <script type="text/javascript" src="/validaciones/vendor/jquery/jquery.min.js"></script>



@stop
@section('contenido')




<div class="container">

<div class="container">

  <?php $status=Session::get('status'); ?>
  @if($status=='ok_create')
   <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Productos registrados con éxito</strong>
   </div>
  @endif

  @if($status=='ok_delete')
   <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usuario eliminado con éxito</strong>
   </div>
  @endif

  @if($status=='ok_update')
   <div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usuario actualizado con éxito</strong>
   </div>
  @endif

</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seleccionar opción para mostrar un formulario u otro</title>
<link type="text/css" href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>




    <script type="text/javascript">
    $( function() {
    $("#category1a").change( function() {
        if ($(this).val() === "1") {
            $("#1a").prop("hidden", false);
        } else {
            $("#1a").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category1b").change( function() {
        if ($(this).val() === "1") {
            $("#1b").prop("hidden", false);
        } else {
            $("#1b").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category1c").change( function() {
        if ($(this).val() === "1") {
            $("#1c").prop("hidden", false);
        } else {
            $("#1c").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category1d").change( function() {
        if ($(this).val() === "1") {
            $("#1d").prop("hidden", false);
        } else {
            $("#1d").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category1e").change( function() {
        if ($(this).val() === "1") {
            $("#1e").prop("hidden", false);
        } else {
            $("#1e").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category1f").change( function() {
        if ($(this).val() === "1") {
            $("#1f").prop("hidden", false);
        } else {
            $("#1f").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category1g").change( function() {
        if ($(this).val() === "1") {
            $("#1g").prop("hidden", false);
        } else {
            $("#1g").prop("hidden", true);
        }
    });
    });
    </script>

    <script type="text/javascript">
    $( function() {
    $("#category2a").change( function() {
        if ($(this).val() === "1") {
            $("#2a").prop("hidden", false);
        } else {
            $("#2a").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category2b").change( function() {
        if ($(this).val() === "1") {
            $("#2b").prop("hidden", false);
        } else {
            $("#2b").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category2c").change( function() {
        if ($(this).val() === "1") {
            $("#2c").prop("hidden", false);
        } else {
            $("#2c").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category2d").change( function() {
        if ($(this).val() === "1") {
            $("#2d").prop("hidden", false);
        } else {
            $("#2d").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category2e").change( function() {
        if ($(this).val() === "1") {
            $("#2e").prop("hidden", false);
        } else {
            $("#2e").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category2f").change( function() {
        if ($(this).val() === "1") {
            $("#2f").prop("hidden", false);
        } else {
            $("#2f").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category2g").change( function() {
        if ($(this).val() === "1") {
            $("#2g").prop("hidden", false);
        } else {
            $("#2g").prop("hidden", true);
        }
    });
    });
    </script>


        <script type="text/javascript">
    $( function() {
    $("#category3a").change( function() {
        if ($(this).val() === "1") {
            $("#3a").prop("hidden", false);
        } else {
            $("#3a").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category3b").change( function() {
        if ($(this).val() === "1") {
            $("#3b").prop("hidden", false);
        } else {
            $("#3b").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category3c").change( function() {
        if ($(this).val() === "1") {
            $("#3c").prop("hidden", false);
        } else {
            $("#3c").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category3d").change( function() {
        if ($(this).val() === "1") {
            $("#3d").prop("hidden", false);
        } else {
            $("#3d").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category3e").change( function() {
        if ($(this).val() === "1") {
            $("#3e").prop("hidden", false);
        } else {
            $("#3e").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category3f").change( function() {
        if ($(this).val() === "1") {
            $("#3f").prop("hidden", false);
        } else {
            $("#3f").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category3g").change( function() {
        if ($(this).val() === "1") {
            $("#3g").prop("hidden", false);
        } else {
            $("#3g").prop("hidden", true);
        }
    });
    });
    </script>

    <script type="text/javascript">
    $( function() {
    $("#category4a").change( function() {
        if ($(this).val() === "1") {
            $("#4a").prop("hidden", false);
        } else {
            $("#4a").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category4b").change( function() {
        if ($(this).val() === "1") {
            $("#4b").prop("hidden", false);
        } else {
            $("#4b").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category4c").change( function() {
        if ($(this).val() === "1") {
            $("#4c").prop("hidden", false);
        } else {
            $("#4c").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category4d").change( function() {
        if ($(this).val() === "1") {
            $("#4d").prop("hidden", false);
        } else {
            $("#4d").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category4e").change( function() {
        if ($(this).val() === "1") {
            $("#4e").prop("hidden", false);
        } else {
            $("#4e").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category4f").change( function() {
        if ($(this).val() === "1") {
            $("#4f").prop("hidden", false);
        } else {
            $("#4f").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category4g").change( function() {
        if ($(this).val() === "1") {
            $("#4g").prop("hidden", false);
        } else {
            $("#4g").prop("hidden", true);
        }
    });
    });
    </script>

    <script type="text/javascript">
    $( function() {
    $("#category5a").change( function() {
        if ($(this).val() === "1") {
            $("#5a").prop("hidden", false);
        } else {
            $("#5a").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category5b").change( function() {
        if ($(this).val() === "1") {
            $("#5b").prop("hidden", false);
        } else {
            $("#5b").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category5c").change( function() {
        if ($(this).val() === "1") {
            $("#5c").prop("hidden", false);
        } else {
            $("#5c").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category5d").change( function() {
        if ($(this).val() === "1") {
            $("#5d").prop("hidden", false);
        } else {
            $("#5d").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category5e").change( function() {
        if ($(this).val() === "1") {
            $("#5e").prop("hidden", false);
        } else {
            $("#5e").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category5f").change( function() {
        if ($(this).val() === "1") {
            $("#5f").prop("hidden", false);
        } else {
            $("#5f").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category5g").change( function() {
        if ($(this).val() === "1") {
            $("#5g").prop("hidden", false);
        } else {
            $("#5g").prop("hidden", true);
        }
    });
    });
    </script>

    <script type="text/javascript">
    $( function() {
    $("#category6a").change( function() {
        if ($(this).val() === "1") {
            $("#6a").prop("hidden", false);
        } else {
            $("#6a").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category6b").change( function() {
        if ($(this).val() === "1") {
            $("#6b").prop("hidden", false);
        } else {
            $("#6b").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category6c").change( function() {
        if ($(this).val() === "1") {
            $("#6c").prop("hidden", false);
        } else {
            $("#6c").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category6d").change( function() {
        if ($(this).val() === "1") {
            $("#6d").prop("hidden", false);
        } else {
            $("#6d").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category6e").change( function() {
        if ($(this).val() === "1") {
            $("#6e").prop("hidden", false);
        } else {
            $("#6e").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category6f").change( function() {
        if ($(this).val() === "1") {
            $("#6f").prop("hidden", false);
        } else {
            $("#6f").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category6g").change( function() {
        if ($(this).val() === "1") {
            $("#6g").prop("hidden", false);
        } else {
            $("#6g").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category7a").change( function() {
        if ($(this).val() === "1") {
            $("#7a").prop("hidden", false);
        } else {
            $("#7a").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category7b").change( function() {
        if ($(this).val() === "1") {
            $("#7b").prop("hidden", false);
        } else {
            $("#7b").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category7c").change( function() {
        if ($(this).val() === "1") {
            $("#7c").prop("hidden", false);
        } else {
            $("#7c").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category7d").change( function() {
        if ($(this).val() === "1") {
            $("#7d").prop("hidden", false);
        } else {
            $("#7d").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category7e").change( function() {
        if ($(this).val() === "1") {
            $("#7e").prop("hidden", false);
        } else {
            $("#7e").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category7f").change( function() {
        if ($(this).val() === "1") {
            $("#7f").prop("hidden", false);
        } else {
            $("#7f").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category7g").change( function() {
        if ($(this).val() === "1") {
            $("#7g").prop("hidden", false);
        } else {
            $("#7g").prop("hidden", true);
        }
    });
    });
    </script>

    <script type="text/javascript">
    $( function() {
    $("#category8a").change( function() {
        if ($(this).val() === "1") {
            $("#8a").prop("hidden", false);
        } else {
            $("#8a").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category8b").change( function() {
        if ($(this).val() === "1") {
            $("#8b").prop("hidden", false);
        } else {
            $("#8b").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category8c").change( function() {
        if ($(this).val() === "1") {
            $("#8c").prop("hidden", false);
        } else {
            $("#8c").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category8d").change( function() {
        if ($(this).val() === "1") {
            $("#8d").prop("hidden", false);
        } else {
            $("#8d").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category8e").change( function() {
        if ($(this).val() === "1") {
            $("#8e").prop("hidden", false);
        } else {
            $("#8e").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category8f").change( function() {
        if ($(this).val() === "1") {
            $("#8f").prop("hidden", false);
        } else {
            $("#8f").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category8g").change( function() {
        if ($(this).val() === "1") {
            $("#8g").prop("hidden", false);
        } else {
            $("#8g").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category9a").change( function() {
        if ($(this).val() === "1") {
            $("#9a").prop("hidden", false);
        } else {
            $("#9a").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category9b").change( function() {
        if ($(this).val() === "1") {
            $("#9b").prop("hidden", false);
        } else {
            $("#9b").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category9c").change( function() {
        if ($(this).val() === "1") {
            $("#9c").prop("hidden", false);
        } else {
            $("#9c").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category9d").change( function() {
        if ($(this).val() === "1") {
            $("#9d").prop("hidden", false);
        } else {
            $("#9d").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category9e").change( function() {
        if ($(this).val() === "1") {
            $("#9e").prop("hidden", false);
        } else {
            $("#9e").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category9f").change( function() {
        if ($(this).val() === "1") {
            $("#9f").prop("hidden", false);
        } else {
            $("#9f").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category9g").change( function() {
        if ($(this).val() === "1") {
            $("#9g").prop("hidden", false);
        } else {
            $("#9g").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category10a").change( function() {
        if ($(this).val() === "1") {
            $("#10a").prop("hidden", false);
        } else {
            $("#10a").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category10b").change( function() {
        if ($(this).val() === "1") {
            $("#10b").prop("hidden", false);
        } else {
            $("#10b").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category10c").change( function() {
        if ($(this).val() === "1") {
            $("#10c").prop("hidden", false);
        } else {
            $("#10c").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category10d").change( function() {
        if ($(this).val() === "1") {
            $("#10d").prop("hidden", false);
        } else {
            $("#10d").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category10e").change( function() {
        if ($(this).val() === "1") {
            $("#10e").prop("hidden", false);
        } else {
            $("#10e").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category10f").change( function() {
        if ($(this).val() === "1") {
            $("#10f").prop("hidden", false);
        } else {
            $("#10f").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category10g").change( function() {
        if ($(this).val() === "1") {
            $("#10g").prop("hidden", false);
        } else {
            $("#10g").prop("hidden", true);
        }
    });
    });
    </script>

    <script type="text/javascript">
    $( function() {
    $("#category11a").change( function() {
        if ($(this).val() === "1") {
            $("#11a").prop("hidden", false);
        } else {
            $("#11a").prop("hidden", true);
        }
    });
    });
    </script>

        <script type="text/javascript">
    $( function() {
    $("#category11b").change( function() {
        if ($(this).val() === "1") {
            $("#11b").prop("hidden", false);
        } else {
            $("#11b").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category11c").change( function() {
        if ($(this).val() === "1") {
            $("#11c").prop("hidden", false);
        } else {
            $("#11c").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category11d").change( function() {
        if ($(this).val() === "1") {
            $("#11d").prop("hidden", false);
        } else {
            $("#11d").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category11e").change( function() {
        if ($(this).val() === "1") {
            $("#2e").prop("hidden", false);
        } else {
            $("#11e").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category11f").change( function() {
        if ($(this).val() === "1") {
            $("#11f").prop("hidden", false);
        } else {
            $("#11f").prop("hidden", true);
        }
    });
    });
    </script>
         <script type="text/javascript">
    $( function() {
    $("#category11g").change( function() {
        if ($(this).val() === "1") {
            $("#11g").prop("hidden", false);
        } else {
            $("#11g").prop("hidden", true);
        }
    });
    });
    </script>



<script type="text/javascript">
function mostrar(id) {
  if (id == "primero") {
    $("#primero").show();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }
  
  if (id == "segundo") {
    $("#primero").hide();
    $("#segundo").show();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }
  
  if (id == "tercero") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").show();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }
  
   if (id == "cuarto") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").show();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "quinto") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").show();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "sexto") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").show();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "septimo") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").show();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "octavo") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").show();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "noveno") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").show();
    $("#decimo").hide();
    $("#once").hide();
  }

    if (id == "decimo") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").show();
    $("#once").hide();
  }

  if (id == "once") {
    $("#primero").hide();
    $("#segundo").hide();
    $("#tercero").hide();
    $("#cuarto").hide();
    $("#quinto").hide();
    $("#sexto").hide();
    $("#septimo").hide();
    $("#octavo").hide();
    $("#noveno").hide();
    $("#decimo").hide();
    $("#once").show();
  }

}
</script>
</head>

<body>

@foreach($ano as $ano)

@endforeach

<div class="container-fluid">
   <!-- Inline Form Block -->
            <div class="block full">
                <!-- Inline Form Title -->
                <div class="block-title">
                    <h2><strong>Seleccione grado</strong> para auditoría</h2>
                </div>
                <!-- END Inline Form Title -->

                <!-- Inline Form Content -->
                <form action="index.php" method="post">

    <select id="status" class="form-control input-md" name="status" onChange="mostrar(this.value);">
       <option value="" selected>Seleccione grado</option>

       @if (DB::table('campos')->where('grado_id', '=', 1)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="primero" disabled>Primero</option>
       @else
       <option value="primero">Primero</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 2)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
        <option value="segundo" disabled>Segundo</option>
       @else
       <option value="segundo">Segundo</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 3)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="tercero" disabled>Tercero</option>
       @else
       <option value="tercero">Tercero</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 4)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="cuarto" disabled>Cuarto</option>
       @else
       <option value="cuarto">Cuarto</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 5)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="quinto" disabled>Quinto</option>
       @else
       <option value="quinto">Quinto</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 6)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="sexto" disabled>Sexto</option>
       @else
       <option value="sexto">Sexto</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 7)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="septimo" disabled>Séptimo</option>
       @else
       <option value="septimo">Séptimo</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 8)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="octavo" disabled>Octavo</option>
       @else
       <option value="octavo">Octavo</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 9)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="noveno" disabled>Noveno</option>
       @else
       <option value="noveno">Noveno</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 10)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="decimo" disabled>Décimo</option>
       @else
       <option value="decimo">Décimo</option>
       @endif

       @if (DB::table('campos')->where('grado_id', '=', 11)->where('ano', '=', $ano->ano)->where('colegio_id', '=', Request::segment(2))->exists()) 
       <option value="once" disabled>Once</option>
       @else
       <option value="once">Once</option>
       @endif

     
     </select>
</form>
                <!-- END Inline Form Content -->
            </div>
            <!-- END Inline Form Block -->
</div>



<div id="primero" class="element" style="display: none;">

  {{ Form::open(array('method' => 'POST', 'id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number"  class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category1a" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1a" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulo as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
 <input id="id_input" type="text" hidden>
   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="1" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   @foreach($date as $date)
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
   @endforeach
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category1b" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1b" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>



   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="1" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  
  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category1c" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1c" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="1" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category1d" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1d" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="1" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
  
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category1e" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1e" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="1" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category1f" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1f" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="1" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category1g" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="1g" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 1)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="1" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
 
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="segundo" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category2a" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2a" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="2" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category2b" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2b" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="2" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category2c" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2c" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="2" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category2d" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2d" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="2" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

 
  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category2e" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2e" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="2" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category2f" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2f" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="2" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category2g" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="2g" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 2)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="2" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>

<div id="tercero" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category3a" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3a" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="3" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category3b" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3b" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="3" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category3c" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3c" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="3" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category3d" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3d" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="3" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
    
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  
  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category3e" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3e" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="3" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
  
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  
  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category3f" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3f" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="3" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category3g" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="3g" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 3)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="3" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>

<div id="cuarto" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category4a" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4a" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="4" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category4b" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4b" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="4" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category4c" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4c" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="4" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category4d" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4d" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="4" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category4e" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4e" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="4" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
   
      </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category4f" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4f" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="4" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category4g" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="4g" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 4)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="4" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
   
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="quinto" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category5a" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5a" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="5" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category5b" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5b" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="5" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category5c" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5c" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="5" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category5d" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5d" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="5" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category5e" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5e" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="5" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category5f" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5f" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="5" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category5g" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="5g" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 5)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="5" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>

<div id="sexto" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category6a" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6a" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="6" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category6b" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6b" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="6" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  
  
  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category6c" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6c" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="6" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   
 
  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category6d" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6d" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="6" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category6e" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6e" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="6" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
  
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category6f" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6f" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div> 
   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="6" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category6g" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="6g" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 6)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="6" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="septimo" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category7a" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7a" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="7" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category7b" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7b" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div> 

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="7" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  
 
  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category7c" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7c" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="7" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category7d" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7d" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="7" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category7e" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7e" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="7" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category7f" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7f" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="7" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category7g" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="7g" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 7)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="7" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="octavo" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category8a" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8a" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="8" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  
 
  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category8b" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8b" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="8" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category8c" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8c" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="8" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category8d" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8d" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="8" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category8e" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8e" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="8" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category8f" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8f" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="8" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category8g" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="8g" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 8)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="8" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
   
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="noveno" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category9a" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9a" class="element">
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="9" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category9b" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9b" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="9" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
  
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category9c" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9c" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="9" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category9d" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9d" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="9" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category9e" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>
    
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9e" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="9" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

 
  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category9f" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9f" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="9" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category9g" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="9g" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 9)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="9" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
   
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>

<div id="decimo" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  
  
  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category10a" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10a" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/> 
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="10" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category10b" required/>
     <option value="0" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10b" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="10" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category10c" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10c" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="10" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category10d" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10d" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>


    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="10" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category10e" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>
    
       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10e" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="10" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
    <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category10f" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10f" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="10" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category10g" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="10g" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 10)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="10" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


<div id="once" class="element" style="display: none;">
  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/crearproducto'))) }}

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>MT</b> - Matematicas</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category11a" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11a" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 1)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="1" />
   <input type="hidden" name="subcategory[]" value="11" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
  

  <h4><b>ES</b> - Español</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category11b" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11b" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 2)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="2" />
   <input type="hidden" name="subcategory[]" value="11" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
   <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  <h4><b>CS</b> - Sociales</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category11c" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11c" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 3)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
   <input type="hidden" name="materia[]" value="3" />
   <input type="hidden" name="subcategory[]" value="11" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
      <input type="hidden" name="ano[]" value="{{$date->ano}}" />
   
  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
   

  <h4><b>CL</b> - Comprensión Lectora</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category11d" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
          @endforeach
     </select>
    </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11d" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="0" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 4)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

    <input type="hidden" name="materia[]" value="4" />
    <input type="hidden" name="subcategory[]" value="11" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
       <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">

  
  <h4><b>IG</b> - Interes General</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
     <select class="form-control input-sm" name="edt[]" id="category11e" required/>
      <option value="" selected>Seleccione editorial</option>
       @foreach($editorialf as $editorial)
        <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
       @endforeach
     </select>
    
    </div>

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11e" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 5)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>
    
    <input type="hidden" name="materia[]" value="5" />
    <input type="hidden" name="subcategory[]" value="11" />
    <input type="hidden" name="region[]" value="{{$region->region_id}}" />
    <input type="hidden" name="colegio[]" value="{{$region->id}}" />
    <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
       <input type="hidden" name="ano[]" value="{{$date->ano}}" />

  </div>


  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ART</b> - Artistica</h4>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
    </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category11f" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11f" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 6)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="6" />
   <input type="hidden" name="subcategory[]" value="11" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
      <input type="hidden" name="ano[]" value="{{$date->ano}}" />

 </div>


 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">


  <h4><b>ING</b> - Ingles</h4>
   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <input type="number" class="form-control input-sm" value="0" name="cantidad[]" value="" required/>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <select class="form-control input-sm" name="edt[]" id="category11g" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($editorialf as $editorial)
       <option value="{{$editorial->id}}">{{$editorial->editorial}}</option>
      @endforeach
    </select>
   </div>

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4" id="11g" class="element" hidden>
    <select class="form-control input-sm" name="titulo[]" id="category" required/>
     <option value="" selected>Seleccione editorial</option>
      @foreach($titulof as $titulo)
      @if($titulo->grado == 11)
      @if($titulo->asignatura == 7)
       <option value="{{$titulo->id}}">{{$titulo->nombre}}</option>
       @endif
       @endif
      @endforeach
    </select>
   </div>

   <input type="hidden" name="materia[]" value="7" />
   <input type="hidden" name="subcategory[]" value="11" />
   <input type="hidden" name="region[]" value="{{$region->region_id}}" />
   <input type="hidden" name="colegio[]" value="{{$region->id}}" />
   <input type="hidden" name="representante[]" value="{{$region->representante_id}}" />
  <input type="hidden" name="ano[]" value="{{$date->ano}}" />
 
 </div>

   <input type="hidden" name="colegiored" value="{{$region->id}}" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
     


   <div class="modal-footer">
    
    {{Form::submit('Crear datos auditoría', array('class' => 'btn btn-primary')  )}}
   </div>
{{ Form::close() }}
</div>


</div>

</body>
</html>
</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>




@stop
