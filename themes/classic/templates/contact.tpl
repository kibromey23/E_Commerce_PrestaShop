{extends file='page.tpl'}

{block name='page_header_container'}{/block}

{if $layout === 'layouts/layout-left-column.tpl'}
  {block name="left_column"}
    <div id="left-column" class="col-xs-12 col-md-4 col-lg-3">
      {hook h='displayContactLeftColumn'}
    </div>
  {/block}
{else if $layout === 'layouts/layout-right-column.tpl'}
  {block name="right_column"}
    <div id="right-column" class="col-xs-12 col-md-4 col-lg-3">
      {hook h='displayContactRightColumn'}
    </div>
  {/block}
{/if}

{block name='page_content'}
  <section class="contact-hero text-center p-5 bg-light mb-4">
    <h1 class="display-5 fw-bold text-primary">Get in Touch</h1>
    <p class="lead">We’re here to help. Contact KB Electronics for support, questions, or suggestions.</p>
  </section>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm p-4 border-0">
          {hook h='displayContactContent'}
        </div>

        <div class="mt-5 text-center">
          <h4>Reach us directly:</h4>
          <p><strong>Email:</strong> support@kbelectronics.com</p>
          <p><strong>Phone:</strong> +1 (800) 123-4567</p>
          <p><strong>Address:</strong> 123 Tech Avenue, Silicon Valley, CA</p>
        </div>
      </div>
    </div>
  </div>
{/block}
