<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Validar se cliente possui débitos</title>
<link href="../../../css/ea.css" rel="stylesheet" type="text/css" />
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
	<span class="ObjectTitle"><script type="text/javascript">document.write(nameClassifier("Validar se cliente possui débitos", " : "))</script>  : Public  &lt;&lt;Activity&gt;&gt; Activity</span>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">03/10/2017 18:19:27</td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic">Modified:</td>
			<td class="ObjectDetailsValue">03/10/2017 18:23:36</td>
		</tr>
		<tr style="height: 10px"><td colspan="2"></td></tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
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
			<td class="ObjectDetailsValue">Mandatory</td>
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
			<td class="ObjectDetailsTopic"><img src="../../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="adv00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">UUID:</td>
			<td class="ObjectDetailsValue">{A75BFD20-864E-4b56-8660-F69090D19E91}</td>
		</tr>
		<tr id="adv01" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Appears In:</td>
			<td class="ObjectDetailsValue"><a href="EA13.php">Validar pendencias financeiras</a></td>
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
						<a href="EA39.php">Validar se cliente pode comprar valor do pedido</a><br />
						Activity «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">Não</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow312" onclick="parent.toggleDiv('detailsDIVLinkFlow312', 'DetailsImageLinkFlow312')" />Details:
							<div id="detailsDIVLinkFlow312" class="DetailsDiv" >
							&nbsp;
							</div>
						</div>
					</td>
				</tr>				<tr>
					<td width="50%" class="TableRow" valign="top">
						<a href="EA32.php">Congelar pedido</a><br />
						Activity «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">Sim</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow313" onclick="parent.toggleDiv('detailsDIVLinkFlow313', 'DetailsImageLinkFlow313')" />Details:
							<div id="detailsDIVLinkFlow313" class="DetailsDiv" >
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
						<a href="EA33.php">Entrada do Pedido</a><br />
						Event «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">&nbsp;</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow314" onclick="parent.toggleDiv('detailsDIVLinkFlow314', 'DetailsImageLinkFlow314')" />Details:
							<div id="detailsDIVLinkFlow314" class="DetailsDiv" >
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
				<td width="50%" class="TableRow" valign="top">activityType</td>
				<td width="50%" class="TableRow" valign="top">Task</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario315" onclick="parent.toggleDiv('detailsDIVScenario315','DetailsImageScenario315')" />Details:
						<div id="detailsDIVScenario315" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: Task,Sub-Process<br />Default: Task<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">adHoc</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario316" onclick="parent.toggleDiv('detailsDIVScenario316','DetailsImageScenario316')" />Details:
						<div id="detailsDIVScenario316" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">adHocOrdering</td>
				<td width="50%" class="TableRow" valign="top">Unspecified</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario317" onclick="parent.toggleDiv('detailsDIVScenario317','DetailsImageScenario317')" />Details:
						<div id="detailsDIVScenario317" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: Parallel,Sequential,Unspecified<br />Default: Unspecified<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">behavior</td>
				<td width="50%" class="TableRow" valign="top">All</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario318" onclick="parent.toggleDiv('detailsDIVScenario318','DetailsImageScenario318')" />Details:
						<div id="detailsDIVScenario318" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: None,One,All,Complex<br />Default: All<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">cancelRemainingInstances</td>
				<td width="50%" class="TableRow" valign="top">true</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario319" onclick="parent.toggleDiv('detailsDIVScenario319','DetailsImageScenario319')" />Details:
						<div id="detailsDIVScenario319" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: true<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">completionQuantity</td>
				<td width="50%" class="TableRow" valign="top">1</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario320" onclick="parent.toggleDiv('detailsDIVScenario320','DetailsImageScenario320')" />Details:
						<div id="detailsDIVScenario320" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Default: 1<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">implementation</td>
				<td width="50%" class="TableRow" valign="top">##unspecified</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario321" onclick="parent.toggleDiv('detailsDIVScenario321','DetailsImageScenario321')" />Details:
						<div id="detailsDIVScenario321" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: ##webService,##unspecified<br />Default: ##unspecified<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">instantiate</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario322" onclick="parent.toggleDiv('detailsDIVScenario322','DetailsImageScenario322')" />Details:
						<div id="detailsDIVScenario322" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">isACalledActivity</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario323" onclick="parent.toggleDiv('detailsDIVScenario323','DetailsImageScenario323')" />Details:
						<div id="detailsDIVScenario323" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">isATransaction</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario324" onclick="parent.toggleDiv('detailsDIVScenario324','DetailsImageScenario324')" />Details:
						<div id="detailsDIVScenario324" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">isForCompensation</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario325" onclick="parent.toggleDiv('detailsDIVScenario325','DetailsImageScenario325')" />Details:
						<div id="detailsDIVScenario325" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">isSequential</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario326" onclick="parent.toggleDiv('detailsDIVScenario326','DetailsImageScenario326')" />Details:
						<div id="detailsDIVScenario326" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">loopCharacteristics</td>
				<td width="50%" class="TableRow" valign="top">None</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario327" onclick="parent.toggleDiv('detailsDIVScenario327','DetailsImageScenario327')" />Details:
						<div id="detailsDIVScenario327" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: None,Standard,MultiInstance<br />Default: None<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">startQuantity</td>
				<td width="50%" class="TableRow" valign="top">1</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario328" onclick="parent.toggleDiv('detailsDIVScenario328','DetailsImageScenario328')" />Details:
						<div id="detailsDIVScenario328" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Default: 1<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">state</td>
				<td width="50%" class="TableRow" valign="top">None</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario329" onclick="parent.toggleDiv('detailsDIVScenario329','DetailsImageScenario329')" />Details:
						<div id="detailsDIVScenario329" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: None,Ready,Active,Cancelled,Aborting,Aborted,Completing,Completed<br />Default: None<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">taskType</td>
				<td width="50%" class="TableRow" valign="top">Abstract</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario330" onclick="parent.toggleDiv('detailsDIVScenario330','DetailsImageScenario330')" />Details:
						<div id="detailsDIVScenario330" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: BusinessRule,Manual,Receive,Service,Send,Script,User,Abstract<br />Default: Abstract<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">testBefore</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario331" onclick="parent.toggleDiv('detailsDIVScenario331','DetailsImageScenario331')" />Details:
						<div id="detailsDIVScenario331" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">triggeredByEvent</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario332" onclick="parent.toggleDiv('detailsDIVScenario332','DetailsImageScenario332')" />Details:
						<div id="detailsDIVScenario332" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

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
				<td width="30%" class="TableRow">_subtypeProperty:</td>
				<td width="70%" class="TableRow">BPMN2.0::Activity::taskType</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroups:</td>
				<td width="70%" class="TableRow">Base Element,Activity,Task,AdHoc,Loop,Sub-Process,Callable Element,Execution,Other</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroupings:</td>
				<td width="70%" class="TableRow">auditing=Base Element;categoryValue=Base Element;documentation=Base Element;monitoring=Base Element;activityType=Activity;calledActivityRef=Activity;instantiate=Activity;isACalledActivity=Activity;isATransaction=Activity;isForCompensation=Activity;resources=Activity;messageRef=Task;operationRef=Task;rendering=Task;script=Task;scriptFormat=Task;taskType=Task;adHoc=AdHoc;adHocOrdering=AdHoc;cancelRemainingInstances=AdHoc;completionCondition=AdHoc;behavior=Loop;complexBehaviorDefinition=Loop;isSequential=Loop;loopCardinality=Loop;loopCharacteristics=Loop;loopCondition=Loop;loopCounter=Loop;loopDataInputRef=Loop;loopDataOutputRef=Loop;loopMaximum=Loop;noneBehaviorEventRef=Loop;oneBehaviorEventRef=Loop;testBefore=Loop;transactionMethod=Sub-Process;transactionProtocol=Sub-Process;triggeredByEvent=Sub-Process;ioBinding=Callable Element;ioSpecification=Callable Element;supportedInterfaceRefs=Callable Element;actualOwner=Execution;completionQuantity=Execution;implementation=Execution;numberOfActiveInstances=Execution;numberOfCompletedInstances=Execution;numberOfInstances=Execution;numberOfTerminatedInstances=Execution;startQuantity=Execution;state=Execution;taskPriority=Execution;assignments=Other;sub-ProcessRef=Other;</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroupStates:</td>
				<td width="70%" class="TableRow">Base Element=closed;Activity=open;Task=open;AdHoc=closed;Loop=closed;Sub-Process=closed;Callable Element=closed;Execution=closed;Other=closed;</td>
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