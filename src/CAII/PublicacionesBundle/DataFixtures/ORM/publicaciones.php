<?php
	namespace CAII\PublicacionesBundle\DataFixtures\ORM;
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use CAII\PublicacionesBundle\Entity\Publicacion;
	use CAII\PublicacionesBundle\Entity\TipoPublicacion;
	
	class publicaciones extends AbstractFixture implements OrderedFixtureInterface
	{
		public function load(ObjectManager $manager)
		{
			
			
			//-- Articulos congresos --
			$publicaciones1 = array(
				//CONGRESO INTERNACIONAL
				array('titulo' => 'Non-intrusive Tracking of Patients with Dementia Using a Wireless Sensor Network','isbn'=>'978-1-4799-0206-4','paginas'=>'460-465','doi'=>'10.1109/DCOSS.2013.18','mostrar'=>'','congreso'=>'7th International Workshop on Wireless Sensor, Actuator and Robot Networks (WiSARN 2013)','fecha'=>'2013-05-20', 'ciudad'=>'Cambridge, MA, USA','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a1','path'=>''),
				array('titulo' => 'Android Implementation of an Auto-Configuration Method for Wi-Fi based MANETs Using Bluetooth','isbn'=>'978-607-95534-5-6','paginas'=>'268-273','doi'=>'','mostrar'=>'','congreso'=>'1st Congreso Internacional de Robótica y Computación (CIRC 2013)','fecha'=>'2013-05-23', 'ciudad'=>'San José Los Cabos, BCS, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a2','path'=>'urbina_andorid_implementation_manet_autoconf_wifi_bluetooth.pdf'),
				array('titulo' => 'MANET Auto-Configuration Using the 802.11 SSID Field in Android','isbn'=>'978-607-95534-5-6','paginas'=>'256-261','doi'=>'','mostrar'=>'','congreso'=>'1st Congreso Internacional de Robótica y Computación (CIRC 2013)','fecha'=>'2013-05-23', 'ciudad'=>'San José Los Cabos, BCS, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a3','path'=>'ozaine_manet_autoconf_ssid_android.pdf'),
				array('titulo' => 'An Efficient Solution Offering Sink Mobility Support in Wireless Sensor Networks','isbn'=>'978-1-4577-0579-3','paginas'=>'1-9','doi'=>'10.1109/WTS.2012.6266080','mostrar'=>'','congreso'=>'IEEE 11th Annual Wireless Telecommunications Symposium (WTS 2012)','fecha'=>'2012-04-18', 'ciudad'=>'London, UK','issn'=>'1934-5070','tipoPublicacion'=>'articuloCI','referencia'=>'a4','path'=>''),
				array('titulo' => 'Intruder Tracking in WSNs Using Binary Detection Sensors and Mobile Sinks','isbn'=>'978-1-4673-0436-8','paginas'=>'2025-2030','doi'=>'10.1109/WCNC.2012.6214123','mostrar'=>'','congreso'=>'IEEE Wireless Communications and Networking Conference (WCNC 2012)','fecha'=>'2012-04-1', 'ciudad'=>'Shanghai','issn'=>'1525-3511','tipoPublicacion'=>'articuloCI','referencia'=>'a5','path'=>''),
				array('titulo' => 'A Multiprocessor Real-Time Scheduling Simulation Tool','isbn'=>'978-1-4577-1326-2','paginas'=>'157-161','doi'=>'10.1109/CONIELECOMP.2012.6189901','mostrar'=>'','congreso'=>'IEEE 22nd International Conference on Electrical Communications and Computers (CONIELECOMP 2012)','fecha'=>'2012-02-27', 'ciudad'=>'Cholula, Puebla, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a6','path'=>''),
				array('titulo' => 'Sistema de Tiempo-Real para el Procesamiento Digital de Audio','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'IEEE 22th Reunión Internacional de Otoño de Comunicaciones, Computación, Electrónica, Automaticaión, Robótica y Exposición Industrial (ROC&C 2011)','fecha'=>'2011-11-01', 'ciudad'=>'Acapulco, Guerrero, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a7','path'=>'amaro11audio.pdf'),
				array('titulo' => 'Fusión de Datos de Temperatura, Humedad e Iluminación para la Detección de Incendios','isbn'=>'','paginas'=>'325-330','doi'=>'','mostrar'=>'','congreso'=>'IEEE XIII Reunión de Otoño de Potencia, Electrónica y Computación (ROPEC 2011)','fecha'=>'2011-11-01', 'ciudad'=>'Morelia, Michoacán, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a8','path'=>'tafoya11fusionDatos.pdf'),
				array('titulo' => 'Metología para la Evaluación e Implementación de Filtros Digitales de Señales','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'4to. Congreso Internacional en Ciencias Computacionales','fecha'=>'2011-11-01', 'ciudad'=>'Ensanada, BC, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a9','path'=>'delgadillo11metodolgia.pdf'),
				array('titulo' => 'Studying the Feasibility of IEEE 802.15.4 Based WSNs for Gas and Fire Tracking Applications Through Simulation','isbn'=>'978-1-61284-926-3','paginas'=>'875-881','doi'=>'10.1109/LCN.2011.6115566','mostrar'=>'','congreso'=>'IEEE 36th Conference on Local Computer Networks (LCN 2011)','fecha'=>'2011-10-04', 'ciudad'=>'Bonn, Alemania','issn'=>'0742-1303','tipoPublicacion'=>'articuloCI','referencia'=>'a10','path'=>''),
				array('titulo' => 'Efficient Routing in Large Sensor Grids Supporting Mobile Drains','isbn'=>'978-1-4577-0352-2','paginas'=>'1-3','doi'=>'10.1109/WoWMoM.2011.5986206','mostrar'=>'','congreso'=>'IEEE International Symposium on a World of Wireless, Mobile and Multimedia Networks (WoWMoM 2011)','fecha'=>'2011-06-20', 'ciudad'=>'Lucca, Italia','issn'=>'0742-1303','tipoPublicacion'=>'articuloCI','referencia'=>'a11','path'=>''),
				
				array('titulo' => 'Design and Evaluation of Routing Scheme Based on Drain Announcements for IEEE 802.15.4 based WSNs','isbn'=>'','paginas'=>'855-862','doi'=>'','mostrar'=>'','congreso'=>'Congreso Español de Informática (CEDI 2010), XXI Jornadas de Paralelismo ','fecha'=>'2010-09-01', 'ciudad'=>'Valencia, España','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a13','path'=>'lino11design.pdf'),
				array('titulo' => 'BluePartner: Application to Promote Human Relationships Through Mobile Devices','isbn'=>'978-1-4244-4387-1','paginas'=>'1-6','doi'=>'10.1109/LATINCOM.2009.5304858','mostrar'=>'','congreso'=>'IEEE Latin-American Conference on Communications (LATINCOM 2009)','fecha'=>'2009-09-10', 'ciudad'=>'Medellin, Colombia','issn'=>'','tipoPublicacion'=>'articuloCI','tipoPublicacion'=>'articuloCI','referencia'=>'a14','path'=>''),
				array('titulo' => 'Desarrollo de una Aplicación en Tiempo-Real','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'VII Congreso Internacional sobre Innovación y Desarrollo Tecnológico (CIINDET 2009)','fecha'=>'2009-09-10', 'ciudad'=>'','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a15','path'=>'orduno09diseno.pdf'),
				array('titulo' => 'Improvement of Pattern Recognition with a Heuristic Design of Correlation Filters','isbn'=>'','paginas'=>'1-7','doi'=>'10.1117/12.826639','mostrar'=>'','congreso'=>'Optics and Photonics for Information Processing III','fecha'=>'2009-08-10', 'ciudad'=>'San Diego, CA, USA','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a16','path'=>''),
				array('titulo' => 'First Experiences with BlueZ','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'IEEE ENC 2008','fecha'=>'2008-11-01', 'ciudad'=>'Mexicali, BC, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a17','path'=>''),
				array('titulo' => 'Desarrollando el estándar IEEE 802.11n, un paso adelante en WLAN','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'II Congreso Internacional de Ciencias Computacionales (CiComp 2007)','fecha'=>'2007-11-10', 'ciudad'=>'Ensenada, BC, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a18','path'=>'herrera07desarrollando.pdf'),//http://www.unsis.edu.mx/~lruiz/C%F3mputo%20M%F3vil/Parcial1/802.11a-n.PDF
				array('titulo' => 'Realtss: A Real-Time Scheduling Simulator','isbn'=>'978-1-4244-1166-5','paginas'=>'165 - 168','doi'=>'10.1109/ICEEE.2007.4344998','mostrar'=>'','congreso'=>'4th International Conference on Electrical and Electronics Engineering (ICEEE 2007)','fecha'=>'2007-09-05', 'ciudad'=>'Ciudad de México, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a19','path'=>''),
				array('titulo' => 'Extending the POSIX-Compatible Application-Defined Scheduling Model','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'26th IEEE Real-Time Systems Symposium (WiP)','fecha'=>'2005-12-01', 'ciudad'=>'Miami, FL, USA','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a20','path'=>''),
				array('titulo' => 'On Integrating POSIX Signals into a RealTime Operating System','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'Seventh Real-Time Linux Workshop','fecha'=>'2005-11-01', 'ciudad'=>'Lille,Francia','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a21','path'=>'diaz05integrating.pdf'),
				array('titulo' => 'A Library Framework for the POSIX Application-Defined Scheduling Proposal','isbn'=>'0-7803-9230-2','paginas'=>'21 - 26','doi'=>'10.1109/ICEEE.2005.1529564','mostrar'=>'','congreso'=>'2nd IEEE International Conference on Electrical and Electronics Engineering','fecha'=>'2005-09-07', 'ciudad'=>'México D.F.','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a22','path'=>''),
				array('titulo' => 'A New Application-Defined Scheduling Implementation in RTLinux','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'Seventh Real-Time Linux Workshop','fecha'=>'2004-11-01', 'ciudad'=>'Singapur, Singapur','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a23','path'=>'diaz04new.pdf'),
				array('titulo' => 'Detection of Vulnerable Road Users in Smart Cities','isbn'=>'9781479950744','paginas'=>'1-6','doi'=>'','mostrar'=>'','congreso'=>'8th International Conference on Next Generation Mobile Applications, Services and Technologies (NGMAST 2014)','fecha'=>'2014-09-01', 'ciudad'=>'Oxford, Reino Unido','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a32','path'=>''),
				array('titulo' => 'Monitoreo y Localización de Personas Extraviadas con Arduino y GSM/GPS','isbn'=>'9780990823629','paginas'=>'323-330','doi'=>'','mostrar'=>'','congreso'=>'7mo. Congreso Internacional en ciencias computacionales CICOMP 2014 UABC','fecha'=>'2014-09-01', 'ciudad'=>'Ensenada B.C, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a33','path'=>''),
				array('titulo' => 'Guarda-control de Sistemas Mecánicos para prevención de accidentes','isbn'=>'','paginas'=>'451-459','doi'=>'','mostrar'=>'','congreso'=>'XX Congreso Internacional Anual de la SOMIM, Sociedad Mexicana de Ingenieros Mecánicos','fecha'=>'2014-09-01', 'ciudad'=>'Juriquilla, Querétaro, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a34','path'=>'estrada14guardacontrol.pdf'),
				array('titulo' => 'Mecanismos de invocación de métodos remotos en Android','isbn'=>'','paginas'=>'15-21','doi'=>'','mostrar'=>'','congreso'=>'3er Congreso Internacional de Ciencias Computacionales (CICOMP 2010)','fecha'=>'2010-11-01', 'ciudad'=>'Ensenada, BC, México','issn'=>'','tipoPublicacion'=>'articuloCI','referencia'=>'a41','path'=>'watkinson10mecanismos.pdf'),



				//CONGRESO NACIONAL
				array('titulo' => 'Aplicación para la Atención de Pacientes Utilizando Dispositivos Móviles','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'3er. Congreso Nacional de Tecnologías de la Información (CONATIC 2013)','fecha'=>'2013-05-01', 'ciudad'=>'Tijuana, BC, México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a24','path'=>'buelna13aplicacion.pdf'),
				array('titulo' => 'AmI-DJ: Sistema de Inteligencia Ambiental para la Selección de Música','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'3er. Congreso Nacional de Tecnologías de la Información (CONATIC 2013)','fecha'=>'2013-05-01', 'ciudad'=>'Tijuana, BC, México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a25','path'=>''),
				array('titulo' => 'Análisis Comparativo entre .NET y Mono','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'3er. Congreso Nacional de Tecnologías de la Información (CONATIC 2013)','fecha'=>'2013-05-01', 'ciudad'=>'Tijuana, BC, México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a26','path'=>'mares13analisis.pdf'),
				array('titulo' => 'Desarrollo de Aplicaciones para Redes de Sensores Inalámbricas Utilizando TinyOS y nesC','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'1er. Congreso Nacional de Tecnologías de la Información (CONATIC 2011)','fecha'=>'2011-05-01', 'ciudad'=>'Tijuana, BC, México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a27','path'=>'atempa11desarrollo.pdf'),
				array('titulo' => 'Evaluación de los Protocolos AODV y AOMDV en Aplicaciones de Detección de Fuego y Gas para Redes de Sensores','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'1er. Congreso Nacional de Tecnologías de la Información (CONATIC 2011)','fecha'=>'2011-05-01', 'ciudad'=>'Tijuana, BC, México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a28','path'=>'jimenez11evaluacion.pdf'),
				array('titulo' => 'Comparativo entre los Protocolos de Encaminamiento DSR y AODV','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'Congreso Nacional de Tecnologías Computacionales y Sistemas de Información (CONTECSI 2007)','fecha'=>'2007-09-01', 'ciudad'=>'León, Guanajuato, México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a29','path'=>'michel07comparativo.pdf'),
				array('titulo' => 'Primeras Expreriencias con BlueZ','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'Congreso Nacional de Tecnologías Computacionales y Sistemas de Información (CONTECSI 2007)','fecha'=>'2007-09-01', 'ciudad'=>'León, Guanajuato, México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a30','path'=>''),
				array('titulo' => 'Un Simulador para la Planificación de Tareas de Tiempo-Real','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'Congreso Nacional de Tecnologías Computacionales y Sistemas de Información (CONTECSI 2007)','fecha'=>'2007-09-01', 'ciudad'=>'León, Guanajuato, México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a31','path'=>''),
				array('titulo' => 'Aplicación del micrófono multi-arreglo de Kinect y Android para control de acciones','isbn'=>'978-607-96072-2-7','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'Congreso Nacional de Tecnologías de la Información y Comunicación','fecha'=>'2014-05-01', 'ciudad'=>'Tijuana, B.C., México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a37','path'=>'estrada14aplicacion.pdf'),
				array('titulo' => 'Arduino Uno, retos y oportunidades','isbn'=>'978-607-96072-2-7','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'Congreso Nacional de Tecnologías de la Información y Comunicación','fecha'=>'2014-05-01', 'ciudad'=>'Tijuana, B.C., México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a38','path'=>'lara14arduino.pdf'),
				array('titulo' => 'Raspberry PI Interfaces Programables','isbn'=>'978-607-96072-2-7','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'Congreso Nacional de Tecnologías de la Información y Comunicación','fecha'=>'2014-05-01', 'ciudad'=>'Tijuana, B.C., México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a39','path'=>'rodriguez14raspberry.pdf'),
				array('titulo' => 'La Enseñanza de las Redes de Computadoras en las IES','isbn'=>'','paginas'=>'','doi'=>'','mostrar'=>'','congreso'=>'1er Coloquio Nacional Aportaciones de la Innovación Educativa a la Sociedad del Conocimiento- ANUIES','fecha'=>'2007-11-01', 'ciudad'=>'Cd. Obregón, Sonora, México','issn'=>'','tipoPublicacion'=>'articuloCN','referencia'=>'a40','path'=>'rangel07ensenanza.pdf'),

			);



			//--Capitulo libro--
			$publicaciones2 = array(
				array('titulo' => 'Human Detection and Tracking in Healthcare Applications Through the Use of a Network of Sensors','paginas' => '','tituloLibro' => 'Human Behaviour Understanding in Networked Sensing Theory and Applications of Networks of Sensors','isbn' => '','fecha' => '2014-12-01 00:01:00','doi'=>'10.1007/978-3-319-10807-0_8','editorial'=>'Springer International Publishing','tipoPublicacion'=>'capLibro','mostrar'=>'','referencia'=>'cl1','path'=>''),
				array('titulo' => 'Evaluating the performance of the IEEE 802.15.4 standard in supporting time-critical Wireless Sensor Networks','paginas' => '17','tituloLibro' => 'Advancements in Distibuted Computing and Internet Technologies: Trends and Issues','isbn' => '9781613501108','fecha' => '2011-08-01 00:01:00','doi'=>'10.4018/978-1-61350-110-8.ch007','editorial'=>'IGI Global','tipoPublicacion'=>'capLibro','mostrar'=>'','referencia'=>'cl2','path'=>''),

				
			);

			//--Conferencia--
			$publicaciones3 = array(
				array(),
				
			);

			//--Libro--
			$publicaciones4 = array(
				array(),
				
			);

			//--ReporteTecnico--
			$publicaciones5 = array(
				array(),
				
			);



			//--Tesis--
			$publicaciones6 = array(
				array('titulo' => 'Evaluación de capacidades de Calidad de Servicio de proveedores de computación en la nube','fecha' => '2014-12-01','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Maestría en Ingenieria Electrónica','tipoPublicacion'=>'tesis','referencia'=>'t15','path'=>'TesisJoseAlberto.pdf'),
				array('titulo' => 'Red de sensores inalámbrica para la detección de incendios forestales','fecha' => '2014-06-01','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Maestría en Ingenieria Electrónica','tipoPublicacion'=>'tesis','referencia'=>'t14','path'=>''),
				array('titulo' => 'Sistema para la detección de VRUS en zonas de riesgo empleando redes de sensores','fecha' => '2013-12-01','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Maestría en Ingenieria Electrónica','tipoPublicacion'=>'tesis','referencia'=>'t13','path'=>'TesisFranciscoGuayante.pdf'),
				array('titulo' => 'Análisis comparativo de las tecnologías .Net y mono','fecha' => '2013-01-30','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Maestría en Ingenieria Electrónica','tipoPublicacion'=>'tesis','referencia'=>'t1','path'=>'TesisOmarDelgadillo.pdf'),
				array('titulo' => 'Red de Sensores Inalámbrica para el Cuidado de Pacientes con Padecimientos Cognitivo-Degenerativos','fecha' => '2013-01-30','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Maestría en Ingenieria Electrónica','tipoPublicacion'=>'tesis','referencia'=>'t2','path'=>''),
				array('titulo' => 'Integración del protocolo de enrutamiento DABR al simulador de redes de sensores inalámbricas ns-2 en su versión 2.34','fecha' => '2012-09-10','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Ingenieria en Sistemas Computacionales','tipoPublicacion'=>'tesis','referencia'=>'t3','path'=>''),
				array('titulo' => 'Sistema de tiempo-real para el procesamiento de señales','fecha' => '2011-12-16','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Maestría en Ingenieria Electrónica','tipoPublicacion'=>'tesis','referencia'=>'t4','path'=>''),
				array('titulo' => 'Metodología para la evaluación del desempeño de filtros digitales de señales','fecha' => '2011-12-16','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Maestría en Ingenieria Electrónica','tipoPublicacion'=>'tesis','referencia'=>'t5','path'=>'TesisSteven.pdf'),
				array('titulo' => 'Uso de redes de sensores inalámbricas de métodos de fusión de información para la deteccion de incendios forestales','fecha' => '2011-12-16','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Maestría en Ingenieria Electrónica','tipoPublicacion'=>'tesis','referencia'=>'t6','path'=>'TesisAramTafoyal.pdf'),
				array('titulo' => 'Realtss: un simulador para la planificación de tareas de tiempo-real','fecha' => '2010-07-01','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Maestría en Ingenieria Electrónica','tipoPublicacion'=>'tesis','referencia'=>'t7','path'=>''),
				array('titulo' => 'Diseño heurístico de filtros adaptativos para el reconocimiento de patrones','fecha' => '2010-07-01','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Maestría en Ingenieria Electrónica','tipoPublicacion'=>'tesis','referencia'=>'t8','path'=>''),
				array('titulo' => 'Bluepartner: aplicación para promover las relaciones humanas a través de dispositivos móviles','fecha' => '2009-10-01','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Maestría en Ingenieria Electrónica','tipoPublicacion'=>'tesis','referencia'=>'t9','path'=>''),
				array('titulo' => 'Implementación de un sistema de Tiempo-Real con RTLinux','fecha' => '2008-11-01','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Ingenieria en Sistemas Computacionales','tipoPublicacion'=>'tesis','referencia'=>'t10','path'=>''),
				array('titulo' => 'Simulación de planificación de tareas de Tiempo-Real','fecha' => '2007-11-01','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Ingenieria en Sistemas Computacionales','tipoPublicacion'=>'tesis','referencia'=>'t11','path'=>''),
				array('titulo' => 'Evaluación de protocolos de encaminamiento para redes ad hoc','fecha' => '2007-11-01','institucion'=>'Instituto Tecnológico de Mexicali','tipoTesis'=>'Ingenieria en Sistemas Computacionales','tipoPublicacion'=>'tesis','referencia'=>'t12','path'=>''),


			
			);



			//--Revistas--
			$publicaciones7 = array(
				array('issn' => '','doi' => '','paginas' => '408-436','titulo'=>'Comprehensive Comparison of Schedulability Tests for Uniprocessor Rate-Monotonic Scheduling','tituloLibro' => 'Journal of Applied Research Technology','fecha' => '2013-06-01 00:01:00','volumen' => '11','serie' => '3','tipoPublicacion'=>'revista','referencia'=>'r1','path'=>'diaz13comprehensive.pdf'),
				array('issn' => '1424-8220','doi' => '10.3390/s130607250','paginas' => '7250-7278','titulo'=>'An Integral Model for Target Tracking Based on the Use of a WSN','tituloLibro' => 'Sensors','fecha' => '2013-06-01 00:01:00','volumen' => '13','serie' => '6','tipoPublicacion'=>'revista','referencia'=>'r2','path'=>'calafate13integral.pdf'),
				array('issn' => '1870-4069','doi' => '','paginas' => '215-224','titulo'=>'BlueNews: modelo para la propagación de información por medio de la tecnología Bluetooth','tituloLibro' => 'Research in Computer Sciences','fecha' => '2012-10-02 00:01:00','volumen' => '60','serie' => '','tipoPublicacion'=>'revista','referencia'=>'r3','path'=>'ozaine11bluenews.pdf'),
				array('issn' => '1870-4069','doi' => '','paginas' => '73-80','titulo'=>'Red de Sensores Inálambrica para el Cuidado de Pacientes con Padecimientos Cognitivo-Degenerativos','tituloLibro' => 'Research in Computer Sciences','fecha' => '2012-09-01 00:01:00','volumen' => '57','serie' => '','tipoPublicacion'=>'revista','referencia'=>'r4','path'=>'murrieta12red.pdf'),
				array('issn' => '2212-0173','doi' => '10.1016/j.protcy.2012.03.008','paginas' => '69-79','titulo'=>'Wireless Sensor Networks and Fusion Information Methods for Forest Fire Detection','tituloLibro' => 'Procedia Technology','fecha' => '2012-05-01 00:01:00','volumen' => '3','serie' => '','tipoPublicacion'=>'revista','referencia'=>'r5','path'=>''),
				array('issn' => '1870-4069','doi' => '','paginas' => '97-114','titulo'=>'First Experiences with BlueZ','tituloLibro' => 'Research in Computer Science','fecha' => '2008-06-02 00:01:00','volumen' => '39','serie' => '','tipoPublicacion'=>'revista','referencia'=>'r6','path'=>'nakasima09first.pdf'),
				array('issn' => '0302-9743','doi' => '10.1007/978-3-319-12568-8_112','paginas' => '925-932','titulo'=>'Robust Face Tracking with Locally-Adaptive Correlation Filtering','tituloLibro' => 'Lecture Notes in Computer Sciences','fecha' => '2014-11-01 00:01:00','volumen' => '8827','serie' => '','tipoPublicacion'=>'revista','referencia'=>'r7','path'=>''),
			
			);


			foreach ($publicaciones1 as $publicacion) {
				$entidad = new Publicacion();
				$entidad->setTitulo($publicacion['titulo']);
				$entidad->setPaginas($publicacion['paginas']);
				$entidad->setDoi($publicacion['doi']);
				$entidad->setFecha(new \DateTime($publicacion['fecha']));
				$entidad->setIsbn($publicacion['isbn']);
				$entidad->setIssn($publicacion['issn']);
				$entidad->setCiudad($publicacion['ciudad']);
				$entidad->setCongreso($publicacion['congreso']);
				$entidad->setMostrar($publicacion['mostrar']);
				$entidad->setPath($publicacion['path']);
				$entidad->setTipoPublicacion($this->getReference(''.$publicacion['tipoPublicacion']));
				$manager->persist($entidad);
				$this->addReference($publicacion['referencia'], $entidad);
				$manager->flush();
				
			}
			


			foreach ($publicaciones2 as $publicacion) {
				$entidad = new Publicacion();
				$entidad->setTituloLibro($publicacion['tituloLibro']);
				$entidad->setPaginas($publicacion['paginas']);
				$entidad->setDoi($publicacion['doi']);
				$entidad->setTitulo($publicacion['titulo']);
				$entidad->setFecha(new \DateTime($publicacion['fecha']));
				$entidad->setIsbn($publicacion['isbn']);
				$entidad->setEditorial($publicacion['editorial']);
				$entidad->setPath($publicacion['path']);
				$entidad->setTipoPublicacion($this->getReference(''.$publicacion['tipoPublicacion']));
				$manager->persist($entidad);
				$this->addReference($publicacion['referencia'], $entidad);
				$manager->flush();
				
			}
			


			foreach ($publicaciones7 as $publicacion) {
				$entidad = new Publicacion();
				$entidad->setTituloLibro($publicacion['tituloLibro']);
				$entidad->setPaginas($publicacion['paginas']);
				$entidad->setDoi($publicacion['doi']);
				$entidad->setTitulo($publicacion['titulo']);
				$entidad->setFecha(new \DateTime($publicacion['fecha']));
				$entidad->setIssn($publicacion['issn']);
				$entidad->setVolumen($publicacion['volumen']);
				$entidad->setSerie($publicacion['serie']);
				$entidad->setPath($publicacion['path']);
				$entidad->setTipoPublicacion($this->getReference(''.$publicacion['tipoPublicacion']));
				$manager->persist($entidad);
				$this->addReference($publicacion['referencia'], $entidad);
				$manager->flush();
				
			}
			


			foreach ($publicaciones6 as $publicacion) {
				$entidad = new Publicacion();
				$entidad->setTitulo($publicacion['titulo']);
				$entidad->setFecha(new \DateTime($publicacion['fecha']));
				$entidad->setEscuela($publicacion['institucion']);
				$entidad->setTipoTesis($publicacion['tipoTesis']);
				$entidad->setPath($publicacion['path']);
				$entidad->setTipoPublicacion($this->getReference(''.$publicacion['tipoPublicacion']));
				$manager->persist($entidad);
				$this->addReference($publicacion['referencia'], $entidad);
				$manager->flush();	
			}
			




		}


		public function getOrder()
	    {
	        return 5; // the order in which fixtures will be loaded
	    }
	}