            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3><strong>Ganti Password Login Sistem</strong></h3>
                                    <p>Ketik Password Baru Anda pada Dua Field Dibawah Ini.</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="pull-left">Kata Sandi Baru</label>
                                        <input type="password" id="pwd1" class="form-control" placeholder="Password" name="Auth[password]">
                                    </div>
                                    <div class="form-group">
                                        <label class="pull-left">Ulangi Kata Sandi Baru</label>
                                        <input type="password" id="pwd2" class="form-control" placeholder="Ketik Ulang Password" name="Auth[repassword]">
                                    </div>
                                <strong><?php echo CHtml::submitButton('Ganti Password!', array('class' => 'btn btn-success', 'onclick' => 'goChange()')); ?></strong>
                                <strong><?php echo CHtml::Button('Batalkan', array('class' => 'btn btn-danger', 'onclick' => 'goBack()')); ?></strong>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <script>
            function goBack() {
                window.history.back();
            }
            </script>

            <script>
            function goChange() {
            $(document).ready(function(){
                //$(".simpan").click(function(){
                    var pwd1=$("#pwd1").val();
                    var pwd2=$("#pwd2").val();
                    if(!pwd1){
                        alert('Password tidak boleh kosong!!');
                        return false;
                    }
                    if(!pwd2){
                        alert('Retype Password tidak boleh kosong!!');
                        return false;
                    }
                    $(".form").submit();
                //});
            });
            }
            </script>