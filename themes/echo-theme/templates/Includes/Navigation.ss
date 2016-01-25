<div id="nav-trigger" class="nav-trigger open">
  <span class="navLine"></span>
  <span class="navLine"></span>
  <span class="navLine"></span>
</div>

<nav id="nav" class="out">
	<ul>
		<% loop $Menu(1) %>
			<li class="$LinkingMode"><span class="nav-label"><a href="$Link" title="$Title.XML">$MenuTitle.XML</a></span></li>
		<% end_loop %>
			<li class="$LinkingMode"><span class="nav-label"><a href="" title="$Title.XML">Contact</a></span></li>	<!-- Use this to trigger the contact page somehow -->
	</ul>
</nav>


