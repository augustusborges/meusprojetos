<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Envio produtos para fabrica</title>
<link href="../../../../css/ea.css" rel="stylesheet" type="text/css" />
<script>
function initPage(src) {	
	if(parent==this&&(this.location+"").indexOf('EARoot')!=-1)
		document.location=(this.location+"").substring(0,(this.location+"").indexOf('EARoot'))+"index"+(this.location+"").substring((this.location+"").lastIndexOf('.'))+"?goto="+((this.location+"").substring((this.location+"").indexOf('EARoot')+7,(this.location+"").lastIndexOf('.')).replace(/\//g,':').replace(/EA/g,""));
	else
		parent.initPage(src);
}

function nameClassifier(name, separator)
{
  var str = name;
  var classifierName;
  var node = document.getElementById('name_classifier');
  if(node != null)
  {
    classifierName = node.innerHTML;
  }
  if(classifierName != "")
  {
   str += separator + classifierName;
  }
  
  return str;
}
</script>
</head>
<body onload="initPage(this);" class="Content">
<div class="pageHeader"></div>
<div class="PageBody">
	<div id="name_classifier" style="display: none;"></div>
	<span class="ObjectTitle"><script type="text/javascript">document.write(nameClassifier("Envio produtos para fabrica", " : "))</script>  : Public  &lt;&lt;BusinessProcess&gt;&gt; BusinessProcess</span>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">03/10/2017 15:57:03</td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic">Modified:</td>
			<td class="ObjectDetailsValue">04/10/2017 09:39:23</td>
		</tr>
		<tr style="height: 10px"><td colspan="2"></td></tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="proj00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Author:</td>
			<td class="ObjectDetailsValue">Augustus Borges</td>
		</tr>
		<tr id="proj01" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Version:</td>
			<td class="ObjectDetailsValue">1.0</td>
		</tr>
		<tr id="proj02" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Phase:</td>
			<td class="ObjectDetailsValue">1.0</td>
		</tr>
		<tr id="proj03" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Status:</td>
			<td class="ObjectDetailsValue">Proposed</td>
		</tr>
		<tr id="proj04" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Complexity:</td>
			<td class="ObjectDetailsValue">Easy</td>
		</tr>
		<tr id="proj05" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Difficulty:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="proj06" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Priority:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="proj05" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Multiplicity:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="adv00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">UUID:</td>
			<td class="ObjectDetailsValue">{BA313B36-8360-4ac3-BD90-B45F66F65124}</td>
		</tr>
		<tr id="adv01" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Appears In:</td>
			<td class="ObjectDetailsValue"><a href="../EA9.php">Pedido</a>, <a href="EA43.php">Fabricação</a></td>
		</tr>
	</table>
	
	<div class="TableGroup" id="TableGroup">
		<ul class="ItemTitle">
			<li onClick="parent.toggleItem('FlowTo');" id="FlowToTitle">Flow To</li>
			<li onClick="parent.toggleItem('FlowFrom');" id="FlowFromTitle">Flow From</li>
			<li onClick="parent.toggleItem('TaggedVal');" id="TaggedValTitle">Tagged Values</li>
			<li onClick="parent.toggleItem('CustomProperties');" id="CustomPropertiesTitle">Advanced</li>
		</ul>
		<div class="ItemBody" id="FlowToTable">
			<table border="0" cellspacing="0" cellpadding="0" class="Table">
				<tr>
					<td width="50%" class="TableHeading">Element</td>
					<td width="50%" class="TableHeading">Name</td>
				</tr>
				<tr>
					<td width="50%" class="TableRow" valign="top">
						<a href="../EA19.php">Faturamento</a><br />
						Event «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">&nbsp;</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow333" onclick="parent.toggleDiv('detailsDIVLinkFlow333', 'DetailsImageLinkFlow333')" />Details:
							<div id="detailsDIVLinkFlow333" class="DetailsDiv" >
							&nbsp;
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="ItemBody" id="FlowFromTable">
			<table border="0" cellspacing="0" cellpadding="0" class="Table">
				<tr>
					<td width="50%" class="TableHeading">Element</td>
					<td width="50%" class="TableHeading">Name</td>
				</tr>
				<tr>
					<td width="50%" class="TableRow" valign="top">
						<a href="../EA27.php">Tem Impressão</a><br />
						Decision «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">Sim</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow334" onclick="parent.toggleDiv('detailsDIVLinkFlow334', 'DetailsImageLinkFlow334')" />Details:
							<div id="detailsDIVLinkFlow334" class="DetailsDiv" >
							&nbsp;
							</div>
						</div>
					</td>
				</tr>				<tr>
					<td width="50%" class="TableRow" valign="top">
						<a href="../EA28.php">Tem Selagem</a><br />
						Decision «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">Sim</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow335" onclick="parent.toggleDiv('detailsDIVLinkFlow335', 'DetailsImageLinkFlow335')" />Details:
							<div id="detailsDIVLinkFlow335" class="DetailsDiv" >
							&nbsp;
							</div>
						</div>
					</td>
				</tr>				<tr>
					<td width="50%" class="TableRow" valign="top">
						<a href="../EA26.php">Tem Empacotamento</a><br />
						Decision «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">Sim</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow336" onclick="parent.toggleDiv('detailsDIVLinkFlow336', 'DetailsImageLinkFlow336')" />Details:
							<div id="detailsDIVLinkFlow336" class="DetailsDiv" >
							&nbsp;
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
<div class="ItemBody" id="TaggedValTable">
	<table align="center" border="0" cellspacing="0" cellpadding="0" class="Table">
		<tr>
			<td width="50%" class="TableHeading">Tag</td>
			<td width="50%" class="TableHeading">Value</td>
		</tr>
					<tr>
				<td width="50%" class="TableRow" valign="top">isClosed</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario337" onclick="parent.toggleDiv('detailsDIVScenario337','DetailsImageScenario337')" />Details:
						<div id="detailsDIVScenario337" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">processType</td>
				<td width="50%" class="TableRow" valign="top">None</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario338" onclick="parent.toggleDiv('detailsDIVScenario338','DetailsImageScenario338')" />Details:
						<div id="detailsDIVScenario338" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: None,Public,Private<br />Default: None<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">state</td>
				<td width="50%" class="TableRow" valign="top">None</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario339" onclick="parent.toggleDiv('detailsDIVScenario339','DetailsImageScenario339')" />Details:
						<div id="detailsDIVScenario339" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: None,Ready,Active,Withdrawn,Completing,Completed,Terminated,Terminating,Compensating,Compensated,Failing,Failed<br />Default: None<br /></div>

						</div>
					</div>
				</td>
			</tr>
	</table>
</div>		<div class="ItemBody" id="CustomPropertiesTable">
			<table border="0" cellspacing="0" cellpadding="0" class="Table">
				<tr>
					<td width="30%" class="TableHeading">Property</td>
					<td width="70%" class="TableHeading">Value</td>
				</tr>
			<tr>
				<td width="30%" class="TableRow">_defaultDiagramType:</td>
				<td width="70%" class="TableRow">BPMN2.0::Business Process</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_makeComposite:</td>
				<td width="70%" class="TableRow">true</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroups:</td>
				<td width="70%" class="TableRow">Base Element,Process,Callable Element,Execution</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroupStates:</td>
				<td width="70%" class="TableRow">Base Element=closed;Process=open;Callable Element=closed;Execution=closed;</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroupings:</td>
				<td width="70%" class="TableRow">auditing=Base Element;documentation=Base Element;monitoring=Base Element;definitionalCollaborationRef=Process;isClosed=Process;isExecutable=Process;processType=Process;resources=Process;supports=Process;ioBinding=Callable Element;ioSpecification=Callable Element;supportedInterfaceRefs=Callable Element;correlationSubscription=Execution;state=Execution;</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">isReadOnly:</td>
				<td width="70%" class="TableRow">false</td>
			</tr>


			</table>
		</div>	</div>
<div class="pageFooter"></div>
 
</body>
</html>