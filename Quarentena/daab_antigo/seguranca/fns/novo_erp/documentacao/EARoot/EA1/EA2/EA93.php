<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Confirmação de Embarque</title>
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
	<span class="ObjectTitle"><script type="text/javascript">document.write(nameClassifier("Confirmação de Embarque", " : "))</script>  : Public  &lt;&lt;Activity&gt;&gt; Activity</span>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">26/10/2017 15:10:57</td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic">Modified:</td>
			<td class="ObjectDetailsValue">26/10/2017 15:11:27</td>
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
			<td class="ObjectDetailsValue">{1FBD8F63-CD2D-434a-9BD3-A8AD15E25EC4}</td>
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
						<a href="EA104.php">Atualização de dados no sistema</a><br />
						Activity «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">&nbsp;</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow557" onclick="parent.toggleDiv('detailsDIVLinkFlow557', 'DetailsImageLinkFlow557')" />Details:
							<div id="detailsDIVLinkFlow557" class="DetailsDiv" >
							&nbsp;
							</div>
						</div>
					</td>
				</tr>				<tr>
					<td width="50%" class="TableRow" valign="top">
						<a href="EA124.php">Envio de documentação atualizada</a><br />
						Activity «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">&nbsp;</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow558" onclick="parent.toggleDiv('detailsDIVLinkFlow558', 'DetailsImageLinkFlow558')" />Details:
							<div id="detailsDIVLinkFlow558" class="DetailsDiv" >
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
						<a href="EA111.php">Embarque do container</a><br />
						Event «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">&nbsp;</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow559" onclick="parent.toggleDiv('detailsDIVLinkFlow559', 'DetailsImageLinkFlow559')" />Details:
							<div id="detailsDIVLinkFlow559" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario560" onclick="parent.toggleDiv('detailsDIVScenario560','DetailsImageScenario560')" />Details:
						<div id="detailsDIVScenario560" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario561" onclick="parent.toggleDiv('detailsDIVScenario561','DetailsImageScenario561')" />Details:
						<div id="detailsDIVScenario561" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario562" onclick="parent.toggleDiv('detailsDIVScenario562','DetailsImageScenario562')" />Details:
						<div id="detailsDIVScenario562" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario563" onclick="parent.toggleDiv('detailsDIVScenario563','DetailsImageScenario563')" />Details:
						<div id="detailsDIVScenario563" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario564" onclick="parent.toggleDiv('detailsDIVScenario564','DetailsImageScenario564')" />Details:
						<div id="detailsDIVScenario564" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario565" onclick="parent.toggleDiv('detailsDIVScenario565','DetailsImageScenario565')" />Details:
						<div id="detailsDIVScenario565" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario566" onclick="parent.toggleDiv('detailsDIVScenario566','DetailsImageScenario566')" />Details:
						<div id="detailsDIVScenario566" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario567" onclick="parent.toggleDiv('detailsDIVScenario567','DetailsImageScenario567')" />Details:
						<div id="detailsDIVScenario567" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario568" onclick="parent.toggleDiv('detailsDIVScenario568','DetailsImageScenario568')" />Details:
						<div id="detailsDIVScenario568" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario569" onclick="parent.toggleDiv('detailsDIVScenario569','DetailsImageScenario569')" />Details:
						<div id="detailsDIVScenario569" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario570" onclick="parent.toggleDiv('detailsDIVScenario570','DetailsImageScenario570')" />Details:
						<div id="detailsDIVScenario570" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario571" onclick="parent.toggleDiv('detailsDIVScenario571','DetailsImageScenario571')" />Details:
						<div id="detailsDIVScenario571" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario572" onclick="parent.toggleDiv('detailsDIVScenario572','DetailsImageScenario572')" />Details:
						<div id="detailsDIVScenario572" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario573" onclick="parent.toggleDiv('detailsDIVScenario573','DetailsImageScenario573')" />Details:
						<div id="detailsDIVScenario573" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario574" onclick="parent.toggleDiv('detailsDIVScenario574','DetailsImageScenario574')" />Details:
						<div id="detailsDIVScenario574" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: None,Ready,Active,Cancelled,Aborting,Aborted,Completing,Completed<br />Default: None<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">taskType</td>
				<td width="50%" class="TableRow" valign="top">Receive</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario575" onclick="parent.toggleDiv('detailsDIVScenario575','DetailsImageScenario575')" />Details:
						<div id="detailsDIVScenario575" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario576" onclick="parent.toggleDiv('detailsDIVScenario576','DetailsImageScenario576')" />Details:
						<div id="detailsDIVScenario576" class="DetailsDiv" >
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
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario577" onclick="parent.toggleDiv('detailsDIVScenario577','DetailsImageScenario577')" />Details:
						<div id="detailsDIVScenario577" class="DetailsDiv" >
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