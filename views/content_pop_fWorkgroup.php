<body style="margin:0px;">
<table class="tftable" border="1" style="text-align:center;">
	<tr>
		<th colspan="3">Workgroup Code</th>
	</tr>
	<tr align="center">
		<th >No</th>
		<th >Code  </th>
		<th >Description  </th>
	</tr>
	<tr align="center">
		<td style="width:20px;">1</a></td>
		<td style="width:150px;"><a href="javascript:Setasset('W1','Administration')" >W1</a></td>
		<td style="width:300px;"><a href="javascript:Setasset('W1','Administration')" >Administration </a></td>
	</tr>
</table>
<script type="text/javascript">
    function Setasset(a_agent,a_agent2) {
        if (window.opener != null && !window.opener.closed) {
            var a_ag = window.opener.document.getElementById("n_w_Code");
            a_ag.value = a_agent;
            var a_ag2 = window.opener.document.getElementById("n_w_Code2");
            a_ag2.value = a_agent2;
        }
        window.close();
    }
</script>