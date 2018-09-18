<div>
    <div id="AuthenticatorTabs">
        <ul>
            <% loop $Forms %>
                <li>
                    <a href="#{$FormName}_Tab">$AuthenticatorName</a>
                </li>
            <% end_loop %>
        </ul>
        <% loop $Forms %>
            <div class="form-tab" id="{$FormName}_Tab">
                $Me
                <br style="clear:both;" />
            </div>
        <% end_loop %>
    </div>
    <script type="application/javascript">
        jQuery( function($) {
            $("#AuthenticatorTabs").tabs();
        } );
    </script>
</div>
