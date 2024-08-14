<!DOCTYPE html>
<html lang="es">
<head>
    <script src="./assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Víctor Andrés Carrillo Barreto">
    <meta name="generator" content="Victor">
    <title>DIGITAL CODE</title>
    <!-- <link rel="stylesheet" href="./assets/css/bootstrap-utilities.css"> -->
    <!-- <link rel="stylesheet" href="./assets/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="./assets/css/digitalcode.css"> -->
    <!-- C:\laragon\www\DigitalCode\assets\sass\style.css -->
</head>

<style>
.dg {
   
}
*,
::after,
::before {
  box-sizing: border-box;
   
}

body {

}

.dg-relative {
  position: relative;
  width: 100vw; 
  height: 100vh;  
  background-size: cover;
  background-position: center center;
}

.digital {
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #000000;
}



.dg-hidden {
  position: absolute;
  left: 25px;
  top: 35px;
  width: min(90%, 30px);
  margin: 30px 0;
  border: 7.5rem solid white;
  z-index: 10;
  background-color: white;
  background: blue;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
}

.dg-h1 {

}

.dg-container,
.dg-container-lg .dg-container-fluid {
  position: relative;
  height: 6.5vh;
  width: min(90%, 30px);
  margin: 0 auto;
  border: 7rem solid blue;
  z-index: 10;
  background-color: blue;
  background: blue;
  display: grid;
  justify-content: center;
  align-items: center;
}

#dg-position {
  position: relative;
  top: 20px;
  left: 20px;
  background: blue;
}

#dg-position-top {
 
}

.dg-container > .dg-container-sm {

}

.dg-header-container {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: #f8f9fc;
  border-bottom: 1px solid #e3e6f0;
}

.dg-title {
  background-color: white;
  text-align: center;
  font-size: 5rem;
  font-weight: 400;
  line-height: 1.5;
  width: auto;
  height: auto;
}

.dg-body {
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem;
}

.dg-form-group {
  background-color: white;
  text-align: center;
  font-size: 5rem;
  font-weight: 400;
  line-height: 1.5;
  width: auto;
  height: auto;
}

.dg-form-input {
  background-color: white;
  text-align: center;
  font-size: 5rem;
  font-weight: 400;
  line-height: 1.5;
  width: auto;
  height: auto;
}

body {
}

</style>

<body>

    <div class="dg-relative"> <!-- Padre -->
        <div class="digital"> <!-- Hijo -->
            <div class="dg-hidden"> <!--  -->
              <div class="dg-container">
                <div class="dg-header-container">
                  <div class="dg-title">
                    <div class="dg-body">
                      <div class="dg-form-group">
                      <label class="for">XD</label><input type="text" class="dg-form-input" id="dg-form">
                      </div>
                      <div class="dg-form-group">
                      <label class="for">XD</label>
                      <input type="text" class="dg-form-input" id="dg-form">
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
 
 <!-- <nav></nav> -->
    <!-- <div class="dg-relative" :digitalcodeurl> relative
        <div class="digital"> relative
            <div class="dg-hidden" id="dg-position-top">Caja1</div>
            <div class="dg-container" id="dg-position">
                <div class="dg-hidden" id="dg-position-top">
                    <div class="dg-header-container">
                        <div class="dg-title">
                            <div class="dg-body">
                            <div class="dg-form-group">
                                <label for="" class="">Email
                                    <input type="text" class="dg-form-input" id="dg-form">
                                </label>
                            </div>
                            <div class="dg-form-group">
                                <label for="" class="">Password
                                    <input type="text" class="dg-form-input" id="dg-form">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>