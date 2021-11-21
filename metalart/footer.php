  <footer id="contato">
    <h2>
      Contato
    </h2>
    <div>
      <form action="">
        <label for="">
          Nome:
        </label> 
        <input type="text">

        <label for="">  
          Email:
        </label>
        <input type="email">

        <label for="">
          Mensagem:
        </label>
        <textarea></textarea>
        <button type="submit"> Enviar </button>
      </form>
      <div>
        <dl>
          <dt>Endereço: </dt>
          <dd><adress>Rua de Paratis, 123 - Natal - RN</adress></dd>
          <dt>Telefone: </dt>
          <dd>
            <a href="tel:+5584987002010"> (84) 98700-2010 </a></dd>
          <dt>Email: </dt>
          <dd>
            <a href="mailto:contato@metalart.com">
            contato@metalart.com
            </a>
          </dd>
        </dl>
        <b>Siga a MetalArte:</b>
        <div>
          <a href="www.facebook.com">
            <img src="<?php echo get_bloginfo('template_url')?>/assets/img/Facebook_Icon.svg" alt="">
          </a>
          <a href="www.instagram.com">
            <img src="<?php echo get_bloginfo('template_url')?>/assets/img/Instagram_Icon.svg" alt="">
          </a>
        </div>
        <a style="margin-top:10px;display:block;" href="<?php echo home_url();?>">
          <img style="margin:-5px;" src="<?php echo get_bloginfo('template_url')?>/assets/img/MetalArt_Marca.svg" alt="">
        </a>
      </div>
    </div>
  </footer>
  <p style="text-align:center;">
    MetalArt por Agência Garagem - Acesse nossa política de privacidade
  </p>
</body>
</html>