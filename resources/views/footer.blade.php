<script type="text/javascript">
    var _zibby_config = {
        api_key: "{{ settings(Astrogoat\Katapult\Settings\KatapultSettings::class, 'public_key') }}",
        environment: "{{ settings(Astrogoat\Katapult\Settings\KatapultSettings::class, 'environment') }}"
    };
    !function(e,t){e.zibby=e.zibby||{};var n,i,r;i=!1,n=document.createElement("script"),n.type="text/javascript",n.async=!0,n.src=t.environment+"/"+"plugin/js/zibby.js",n.onload=n.onreadystatechange=function(){i||this.readyState&&"complete"!=this.readyState||(i=!0,e.zibby.setConfig(t.api_key))},r=document.getElementsByTagName("script")[0],r.parentNode.insertBefore(n,r);var s=document.createElement("link");s.setAttribute("rel","stylesheet"),s.setAttribute("type","text/css"),s.setAttribute("href",t.environment+"/"+"plugin/css/zibby.css");var a=document.querySelector("head");a.insertBefore(s,a.firstChild)}(window,_zibby_config);
</script>
