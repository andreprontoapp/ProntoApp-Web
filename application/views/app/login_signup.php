<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<title>Login</title>
    	
    	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
    	
    	<script src="<?php echo base_url();?>lib/jquery/jquery-2.1.1.min.js"></script>
    	
    	<script src="<?php echo base_url();?>js/login_signup.js"></script>
    	<link rel="stylesheet/less" type="text/css" href="<?php echo base_url();?>lib/bootstrap-3.2.0/less/bootstrap.less" />
    	<script src="<?php echo base_url();?>lib/bootstrap-3.2.0/dist/js/bootstrap.min.js"></script>
    	
    	<script src="<?php echo base_url();?>lib/less/less-1.7.5.min.js"></script>
    </head>
    <body id="loginSignup">
    
        <div id="login" class="active col-md-4 col-sm-6 col-xs-10 col-md-offset-4 col-sm-offset-3 col-xs-offset-1">
            <img id="loginLogo" src="<?php echo base_url('img/logo-140-b.png');?>" />
            <br />
            <h3>Bem-vindo</h3>
            <div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <br />
            <form action="<?php echo site_url('app/main');?>">
				<input type="email" class="form-control" placeholder="email" >
				<input type="password" class="form-control" placeholder="Senha">
				<button type="submit" class="btn btn-primary">
					Entrar
				</button>
			</form>
			<div>
				<a id="forgotPassword" href="#">Esqueceu a senha?</a>
			</div>
			<strong>Ainda não possui uma conta?</strong>
			<button id="newAccount" class="btn btn-primary">
                Criar conta
            </button>
        </div>
        
        <div id="signup" class="col-md-4 col-sm-6 col-xs-10 col-md-offset-4 col-sm-offset-3 col-xs-offset-1">
            <h3>Cadastro</h3>
            <div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <br />
            <form method="post" action="<?php echo site_url('app/main');?>">
                <input type="text" class="form-control" placeholder="Nome" >
                <input type="email" class="form-control" placeholder="Email">
                <input type="password" class="form-control" placeholder="Senha">
                <input type="password" class="form-control" placeholder="Comfirme a senha">
                <div>
                    <a id="terms" href="#">Termos de uso</a>
                </div>
                <label>
                    <input type="checkbox"/>Li e concordo com os termos.
                </label>
                <button type="submit" class="btn btn-primary">
                    Enviar
                </button>
            </form>
            <a id="backLogin" href="#" class="btn btn-primary">
                Login
            </a>
        </div>
            
    </body>
</html>