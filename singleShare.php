<hr />
<div class="singleShare">

 <?php
  $url = $url2 = rawurlencode( get_permalink() );
  $title = get_the_title();
  $username = 'TKPNews'; ?>

  <a
    class="ui-btn ui-btn-inline"
    target="_blank"
    title="Sou Facebook"
    href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>&t=<?php echo $title; ?>">
    <strong>
      <i class="fa fa-facebook fa-lg fb"></i> <span class="fab">Facebook</span>
    </strong>
  </a>

  <a
    class="ui-btn ui-btn-inline"
    target="_blank"
    title="Sou Twitter"
    href="http://twitter.com/share?url=<?php echo $url2; ?>&text=<?php echo $title; ?>&via=<?php echo $username; ?>">
    <strong>
      <i class="fa fa-twitter fa-lg tw"></i> <span class="fab">Twitter</span>
    </strong>
  </a>

  <a
    class="ui-btn ui-btn-inline"
    target="_blank"
    title="sou WhatsApp"
    href="whatsapp://send?text=<?= $title . ' ' . $url2 . ' via @' . $username; ?>">
    <strong>
      <i class="fa fa-whatsapp fa-lg wa"></i> <span class="fab">WhatsApp</span>
    </strong>
  </a>

  <a
    class="ui-btn ui-btn-inline"
    target="_blank"
    title="Sou Google Plus"
    href="https://plus.google.com/share?url=<?php echo $url; ?>">
    <strong>
      <i class="fa fa-google-plus fa-lg google"></i> <span class="fab">Google+</span>
    </strong>
  </a>

</div>
<hr />