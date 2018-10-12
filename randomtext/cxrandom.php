<style type="text/css">

.div1 {
font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
color: rgba(255, 216, 0, 0.5);
font-size: 12px;
font-weight: bold;
}

</style>

<?php

$random = array(
// insert here text
'Did you closed the NC´s?',
'Did you do the inspections?',
'Have you audited the store?',
'Have you audited the reception?',
'Have you updated the training records?',
'Have you audited the vehicles?',
'Have you rated providers?',
'You´ve scored inspections?',
'Have you marked the objectives?',
'Have you listed the tasks of each objective?',
'have you imparted training?',
'Have you evaluated new workers?',
'Have you updated customer survey?',
'Have you rated customer satisfaction?',
'Have you checked the shop?',
'Have you checked the maintenance of machines?',
'<img src="images/h3.png">',
'Have you control the version of your software (3.01)',
'Plan outsourced processes (3.12)',
'Risk control products and key processes (4.1)',
'Determination of the requirements of all stakeholders (legal and specific customer) (4.2)',
'Risks affecting the compliance of product / service and customer satisfaction (Process FMEA) (SWOT) (5.1)',
'Objectives accordance oriented product / service, and the general objectives of the company. (required SWOT and economic control of quality) (6.2)',
'Changes of any nature affecting the compliance of the service, must be controlled (6.3)',
'We must find unwritten customer requirements (7.1)',
'Provide training to meet the written and unwritten customer requirements (7.1.4)',
'Training and competition processes (more detailed training requirements using machines, etc.) (7.2)',
'Operators should know the consequences of their breach of policy, objectives and customer satisfaction (7.3)',
'Determine when and with whom to communicate (associations, government, etc.), documentadamente (7.4)',
'Version control the media on which the documentation is provided or generated, as well as author, title, revision, approval, etc. . (7.5)',
'POKE YOKE to forecast nonconformities (nonconformities risk oriented)',
'After-sales service, according to the lifetime of the product are defined, and the study of risks associated with the product, customer and legal requirements (8.6.8)',
'Actions for nonconformities in services rendered or products sold or in use (aftermarket) (8.6.8) shall be defined',
'MUST Internal audits conducted at planned intervals (not worth a single annual audit of the entire system) (9.2)',
'A compulsory audit program, according to the importance of the processes, the risks identified in the system, opportunities, objectives and results of previous audits (9.2)',
'The results of the review of the system should contain relevant data on company performance (10.2)',


//
);



shuffle($random);
$x = 0;
while($x <= 0){
$x++;
echo '<div id="div1">';
echo $codd = $random[$x];
echo '</div>';
}

?>
