{**
 * Modernized PrestaShop Layout Template
 * Used for KB Electronics Frontend Theme
 *}
{extends file=$layout}

{block name='content'}

  <section id="main" class="container my-5">

    {* === Page Header === *}
    {block name='page_header_container'}
      {block name='page_title' hide}
        <header class="page-header text-center mb-4">
          <h1 class="display-5 fw-bold text-primary">{$smarty.block.child}</h1>
        </header>
      {/block}
    {/block}

    {* === Main Content Section === *}
    {block name='page_content_container'}
      <div id="content" class="page-content card shadow-sm p-4 border-0">
        {block name='page_content_top'}
          {* Optional content above the main page content (e.g., breadcrumbs, alerts) *}
        {/block}

        {block name='page_content'}
          <!-- Dynamic Page Content (from child templates like index.tpl) -->
        {/block}
      </div>
    {/block}

    {* === Page Footer === *}
    {block name='page_footer_container'}
      <footer class="page-footer mt-5 text-center text-muted">
        {block name='page_footer'}
          <hr>
          <p style="margin-top:20px;">&copy; {date('Y')} <strong>KB Electronics</strong>. All rights reserved.</p>
        {/block}
      </footer>
    {/block}

  </section>

{/block}
