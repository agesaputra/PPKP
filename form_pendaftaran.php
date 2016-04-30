<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Form With Labels On Top</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form_pendaftaran.css">

</head>


	<header>
		<h1 style="text-align : center ">JOB FAIR PPKPK UKDW</h1>

    </header>




    <div class="main-content">

        <!-- You only need this form and the form-labels-on-top.css -->

        <form class="form-labels-on-top" method="post" action="#">

            <div class="form-title-row">
                <h1>Form Pendaftaran Job Fair</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Nama Panjang</span>
                    <input type="text" name="name">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Asal Kampus</span>
                    <input type="text" name="text">
                </label>
            </div>

						<div class="form-row">
                <label>
                    <span>Jurusan</span>
                    <input type="email" name="email">
                </label>
            </div>

						<div class="form-row">
                <label>
                    <span>IPK</span>
                    <input type="text" name="text">
                </label>
            </div>

						<div class="form-row">
								<label>
										<span>EMAIL</span>
										<input type="email" name="email">
								</label>
						</div>



            <div class="form-row">
                <label><span>APAKAH ANDA PERNAH BEKERJA ?</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>YA</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>TIDAK</span>
                        </label>
                    </div>

                </div>
            </div>

            <div class="form-row">
                <button type="submit">Daftar</button>
            </div>

        </form>

    </div>

</body>

</html>
