<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Trâmites para liberação de carga</title>
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
	<span class="ObjectTitle"><script type="text/javascript">document.write(nameClassifier("Trâmites para liberação de carga", " : "))</script>  : Public  &lt;&lt;Activity&gt;&gt; Activity</span>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">26/10/2017 15:35:47</td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic">Modified:</td>
			<td class="ObjectDetailsValue">26/10/2017 15:36:14</td>
		</tr>
		<tr style="height: 10px"><td colspan="2"></td></tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="proj00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Author:</td>
			<td class="ObjectDetailsValue">augus</td>
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
			<td class="ObjectDetailsTopic"><img src="../../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="adv00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">UUID:</td>
			<td class="ObjectDetailsValue">{B4436EFD-E340-45a0-8E43-359F1AEB3F2E}</td>
		</tr>
		<tr id="adv01" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Appears In:</td>
			<td class="ObjectDetailsValue"><a href="EA66.php">Importação - AS IS</a></td>
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
						<a href="EA123.php">Carregamento de carga</a><br />
						Activity «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">&nbsp;</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow1128" onclick="parent.toggleDiv('detailsDIVLinkFlow1128', 'DetailsImageLinkFlow1128')" />Details:
							<div id="detailsDIVLinkFlow1128" class="DetailsDiv" >
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
						<a href="EA110.php">Chegada de carga no porto</a><br />
						Event «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">&nbsp;</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow1129" onclick="parent.toggleDiv('detailsDIVLinkFlow1129', 'DetailsImageLinkFlow1129')" />Details:
							<div id="detailsDIVLinkFlow1129" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1130" onclick="parent.toggleDiv('detailsDIVScenario1130','DetailsImageScenario1130')" />Details:
						<div id="detailsDIVScenario1130" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1131" onclick="parent.toggleDiv('detailsDIVScenario1131','DetailsImageScenario1131')" />Details:
						<div id="detailsDIVScenario1131" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1132" onclick="parent.toggleDiv('detailsDIVScenario1132','DetailsImageScenario1132')" />Details:
						<div id="detailsDIVScenario1132" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1133" onclick="parent.toggleDiv('detailsDIVScenario1133','DetailsImageScenario1133')" />Details:
						<div id="detailsDIVScenario1133" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1134" onclick="parent.toggleDiv('detailsDIVScenario1134','DetailsImageScenario1134')" />Details:
						<div id="detailsDIVScenario1134" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1135" onclick="parent.toggleDiv('detailsDIVScenario1135','DetailsImageScenario1135')" />Details:
						<div id="detailsDIVScenario1135" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1136" onclick="parent.toggleDiv('detailsDIVScenario1136','DetailsImageScenario1136')" />Details:
						<div id="detailsDIVScenario1136" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1137" onclick="parent.toggleDiv('detailsDIVScenario1137','DetailsImageScenario1137')" />Details:
						<div id="detailsDIVScenario1137" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1138" onclick="parent.toggleDiv('detailsDIVScenario1138','DetailsImageScenario1138')" />Details:
						<div id="detailsDIVScenario1138" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1139" onclick="parent.toggleDiv('detailsDIVScenario1139','DetailsImageScenario1139')" />Details:
						<div id="detailsDIVScenario1139" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1140" onclick="parent.toggleDiv('detailsDIVScenario1140','DetailsImageScenario1140')" />Details:
						<div id="detailsDIVScenario1140" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1141" onclick="parent.toggleDiv('detailsDIVScenario1141','DetailsImageScenario1141')" />Details:
						<div id="detailsDIVScenario1141" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1142" onclick="parent.toggleDiv('detailsDIVScenario1142','DetailsImageScenario1142')" />Details:
						<div id="detailsDIVScenario1142" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1143" onclick="parent.toggleDiv('detailsDIVScenario1143','DetailsImageScenario1143')" />Details:
						<div id="detailsDIVScenario1143" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1144" onclick="parent.toggleDiv('detailsDIVScenario1144','DetailsImageScenario1144')" />Details:
						<div id="detailsDIVScenario1144" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1145" onclick="parent.toggleDiv('detailsDIVScenario1145','DetailsImageScenario1145')" />Details:
						<div id="detailsDIVScenario1145" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1146" onclick="parent.toggleDiv('detailsDIVScenario1146','DetailsImageScenario1146')" />Details:
						<div id="detailsDIVScenario1146" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario1147" onclick="parent.toggleDiv('detailsDIVScenario1147','DetailsImageScenario1147')" />Details:
						<div id="detailsDIVScenario1147" class="DetailsDiv" >
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