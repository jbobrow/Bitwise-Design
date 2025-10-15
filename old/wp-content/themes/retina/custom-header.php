<?php
$header_textcolor = get_header_textcolor();
if( get_header_image() || !empty( $header_textcolor ) || $header_textcolor != 'blank' ) :
?>
<div id="headimg"> 
	<div id="amazon">
		<div id="custom-sale-image">
			<a href="http://www.amazon.com/gp/product/B00I9146CU"><img src="http://bitwise-design.com/img/amazon_keybit.png"/></a><br/>
			<br/>
			<a href="http://www.amazon.com/gp/product/B00I9146CU"><img src="https://payments.amazon.com/gp/cba/button?cartOwnerId=A2KSHAKGI4RYR2&size=large&color=orange&background=other"/></a>
		</div>
	</div>
 <!--<div id="amazon">
 <script type="text/javascript" src="https://static-na.payments-amazon.com/cba/js/us/PaymentWidgets.js"></script>
	<script>
		RenderCBAButtonById = function(ordervalue, buttonid) {
		var standard1 = new CBA.Widgets.StandardCheckoutWidget({
		merchantId: "A2KSHAKGI4RYR2",
		orderInput: {
		format: "XML",
		value: ordervalue}
		}).render(buttonid);
		}
	</script>

	<table><tr>
	<td>
	<div id="custom-sale-image">
		<img src="http://bitwise-design.com/img/amazon_keybit.png"/><br>
	</div>
	<div id="sale-button">
	<div id="cbaxmlButton-dxqGOfEDCC-1395902646">
	-->
		<!--"https://payments.amazon.com/gp/cba/button?cartOwnerId=A2KSHAKGI4RYR2&size=large&color=orange&background=other"-->
		<!--
		<img src="https://payments.amazon.com/gp/cba/button?cartOwnerId=A2KSHAKGI4RYR2&size=large&color=orange&background=other"/><br>
	</div>
	</div>
	<script language="javascript" type="text/javascript">
	RenderCBAButtonById("type:cba-signed-order/sha1-hmac/2;order:PD94bWwgdmVyc2lvbj0nMS4wJyBlbmNvZGluZz0nVVRGLTgnPz48T3JkZXIgeG1sbnM9J2h0dHA6Ly9wYXltZW50cy5hbWF6b24uY29tL2NoZWNrb3V0LzIwMDgtMTEtMzAvJz48Q2FydD48SXRlbXM+PEl0ZW0+PFNLVT5iaXQwMTwvU0tVPjxNZXJjaGFudElkPkEyS1NIQUtHSTRSWVIyPC9NZXJjaGFudElkPjxUaXRsZT5LZXlCaXQgLSBNYWdTYWZlIEFkYXB0ZXIgS2V5IFJpbmc8L1RpdGxlPjxEZXNjcmlwdGlvbj5LZXlCaXQgc2VjdXJlbHkgaG9sZHMgeW91ciBNYWdTYWZlIGNvbnZlcnRlciBzbyB5b3UgY2FuIGNhcnJ5IGl0IG9uIHlvdXIga2V5cyBvciBsYW55YXJkIGFuZCBjaGFyZ2UgeW91ciBuZXh0LWdlbiBNYWNCb29rIHdpdGggYW55IGxlZ2FjeSBjaGFyZ2luZyBjYWJsZSB3aGVyZXZlciB5b3UgZ28uPC9EZXNjcmlwdGlvbj48UHJpY2U+PEFtb3VudD4xNS4wMDwvQW1vdW50PjxDdXJyZW5jeUNvZGU+VVNEPC9DdXJyZW5jeUNvZGU+PC9QcmljZT48UXVhbnRpdHk+MTwvUXVhbnRpdHk+PFdlaWdodD48QW1vdW50Pi4yPC9BbW91bnQ+PFVuaXQ+bGI8L1VuaXQ+PC9XZWlnaHQ+PEZ1bGZpbGxtZW50TmV0d29yaz5NRVJDSEFOVDwvRnVsZmlsbG1lbnROZXR3b3JrPjwvSXRlbT48L0l0ZW1zPjwvQ2FydD48L09yZGVyPg==;signature:CNkH0X/PN2eeo3e/QvxNFDC03BU=", "cbaxmlButton-dxqGOfEDCC-1395902646");
	</script>
	</td></tr>
	</table>
 </div>
 -->
 <div id="logo">
	<a href="http://www.shapeways.com/model/956722/magsafe-adapter-key-ring.html?li=productBox-search"><img src="http://bitwise-design.com/img/bitwise_logo.png"/></a>

  <?php if( ( !empty( $header_textcolor ) && $header_textcolor != 'blank' ) ) : ?>
  <div class="container_16 clearfix">
    <div class="grid_16 alpha omega">
      
      <div id="logo-text">
        <span class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
        <span class="site-description"><?php bloginfo( 'description' ); ?></span>
      </div> <!-- end of #head-text -->
    
    </div>
  </div>
  <?php endif; ?>

</div>
<?php endif; ?>