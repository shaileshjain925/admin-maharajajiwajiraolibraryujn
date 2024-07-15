<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use App\Traits\CommonTraits;

class CourseSubjectDepartmentSeeder extends Migration
{
    use CommonTraits;
    public function up()
    {
        $course = [
            ["course_code" => "BAHU", "course_name" => "BA(Honours)"],
            ["course_code" => "BALLBU", "course_name" => "BALLB-U"],
            ["course_code" => "BBAHU", "course_name" => "BBA(Honours)"],
            ["course_code" => "BCAHU", "course_name" => "BCA(Honours)"],
            ["course_code" => "BCOMHU", "course_name" => "B.Com.(Honours)"],
            ["course_code" => "BFAU", "course_name" => "Bachelor of Fine Arts"],
            ["course_code" => "BJMCU", "course_name" => "BJMC"],
            ["course_code" => "BLSCU", "course_name" => "B.Lib Sc"],
            ["course_code" => "BPAU", "course_name" => "Bachelor of Performing Arts"],
            ["course_code" => "BPESU", "course_name" => "Bachelor of Physical Education & Sports -U"],
            ["course_code" => "BPHARMU", "course_name" => "B.Pharma-U"],
            ["course_code" => "BSCHU", "course_name" => "B.Sc.(Honours)"],
            ["course_code" => "CAYU", "course_name" => "Certificate in Advanced Yoga"],
            ["course_code" => "CCAIU", "course_name" => "Certificate Course in Artificial Intelligence"],
            ["course_code" => "CCANTU", "course_name" => "Certificate Course in ASP.NET Technology"],
            ["course_code" => "CCAPU", "course_name" => "Certificate Course in Astrophysics"],
            ["course_code" => "CCATU", "course_name" => "Certificate Course in Aquaculture Technology"],
            ["course_code" => "CCBDAU", "course_name" => "Certificate Course in Big Data Analytics"],
            ["course_code" => "CCBGPU", "course_name" => "Certificate in Bhartiya Gyan Parampara"],
            ["course_code" => "CCCOU", "course_name" => "Certificate Course in Computer Operations"],
            ["course_code" => "CCDBTU", "course_name" => "Certificate Course in Database Technologies"],
            ["course_code" => "CCDCCNU", "course_name" => "Cert. Course in Data Comm. and Comp. Net."],
            ["course_code" => "CCDMU", "course_name" => "Certificate Course in Data Mining"],
            ["course_code" => "CCDSU", "course_name" => "Certificate Course in DBMS and SQL"],
            ["course_code" => "CCDTU", "course_name" => "Certificate Course in Dairy Technology"],
            ["course_code" => "CCERPU", "course_name" => "Certificate Course in ERP"],
            ["course_code" => "CCFITPCU", "course_name" => "Cert. Course in Fundamental IT & PC Packages"],
            ["course_code" => "CCHJPLU", "course_name" => "Cert. Course in HTML & JAVASCRIPT Progra. Lang."],
            ["course_code" => "CCILTU", "course_name" => "Cert. Course in Instrumentation Laboratory Technology"],
            ["course_code" => "CCIMPU", "course_name" => "CC in Imp. Rulers&Were Contribution in Ind Hist."],
            ["course_code" => "CCIOTU", "course_name" => "Certificate Course in Internet of Things(IoT)"],
            ["course_code" => "CCIPWTTU", "course_name" => "Cert. Course in Industrial Pollution and Wastewater Treatment Technology"],
            ["course_code" => "CCIS", "course_name" => "Certificate in Information Security and Cyber Law"],
            ["course_code" => "CCISCLU", "course_name" => "Cert. Course in Infor. Security and Cyber Law"],
            ["course_code" => "CCISU", "course_name" => "Certificate Course in Information Security"],
            ["course_code" => "CCLAISU", "course_name" => "Cert. Course in Legal Aspects of Infor. Security"],
            ["course_code" => "CCMLU", "course_name" => "Certificate Course in Machine Learning"],
            ["course_code" => "CCMTCSU", "course_name" => "Cert Course in Modern Techno. in Comp. Science"],
            ["course_code" => "CCNSU", "course_name" => "Certificate Course in Network Security"],
            ["course_code" => "CCODAU", "course_name" => "Cert. Course in Optoelectronic Devices & Applications"],
            ["course_code" => "CCPLU", "course_name" => "Cert. Course in C & C++ Program. Lang."],
            ["course_code" => "CCPPHPLU", "course_name" => "Certificate Course in PHP Progra. Language"],
            ["course_code" => "CCPPLU", "course_name" => "Cert. Course in Python Programming Lang."],
            ["course_code" => "CCPTTCU", "course_name" => "Certi. Course in Printing and Textile Chemistry"],
            ["course_code" => "CCRMU", "course_name" => "Certificate Course on Research Methodology"],
            ["course_code" => "CCSTEU", "course_name" => "Certificate Course in Seed Technology"],
            ["course_code" => "CCTGDU", "course_name" => "Certificate Course in Tourism Guide"],
            ["course_code" => "CCTU", "course_name" => "Certificate Course in Tally"],
            ["course_code" => "CCVBNTU", "course_name" => "Certificate Course in VB.NET Technology"],
            ["course_code" => "CCVTU", "course_name" => "Cert. Course in Vermiculture Technology"],
            ["course_code" => "CDAU", "course_name" => "Certificate in Data Analytics"],
            ["course_code" => "CFPPU", "course_name" => "Cert. in Food Preservation and Processing"],
            ["course_code" => "CGTU", "course_name" => "Cert. in Gardener Training"],
            ["course_code" => "CINCLU", "course_name" => "Certificate in Computational Linguistics"],
            ["course_code" => "CINDNU", "course_name" => "Certificate in Dance"],
            ["course_code" => "CINFDU", "course_name" => "Certificate in Fashion Designing"],
            ["course_code" => "CININSU", "course_name" => "Certificate in Instrument "],
            ["course_code" => "CINMUSU", "course_name" => "Certificate in Music"],
            ["course_code" => "CINPPU", "course_name" => "Certificate in Phonetics and Phonology"],
            ["course_code" => "CINTDU", "course_name" => "Certificate in Theater & Drama"],
            ["course_code" => "CKPU", "course_name" => "Certificate in khel patrakarita"],
            ["course_code" => "CMAU", "course_name" => "Cert. in Milk Adulteration"],
            ["course_code" => "CMTU", "course_name" => "Cert. in Mushroom Technology"],
            ["course_code" => "CPAU", "course_name" => "Certificate in Python for Analytics"],
            ["course_code" => "CPELU", "course_name" => "Certificate of Proficiency in English Language"],
            ["course_code" => "CPFU", "course_name" => "Cert. Of Prof. In French"],
            ["course_code" => "CPRSU", "course_name" => "Cert. Prog. in Ramcharitmanas, Sanskrit"],
            ["course_code" => "CPRU", "course_name" => "Cert. Of Prof. In Russian"],
            ["course_code" => "CPRVSU", "course_name" => "Cert. Prog. in Ramcharitmanas, Vigyan"],
            ["course_code" => "CPTAIU", "course_name" => "Cert. in Practical Training on Analytical Ins."],
            ["course_code" => "CVPU", "course_name" => "Certificate in vigyan patrakarita"],
            ["course_code" => "DAFTMU", "course_name" => "D.Air Fare & T. Mngt."],
            ["course_code" => "DCAPPU", "course_name" => "Diploma in Computer Applications"],
            ["course_code" => "DCSU", "course_name" => "Diploma in Cyber Security"],
            ["course_code" => "DDAU", "course_name" => "Diploma in Data Analytics"],
            ["course_code" => "DDBTU", "course_name" => "Diploma in Database Technologies"],
            ["course_code" => "DDPEOU", "course_name" => "Diploma in Data Processing & Data Entry Oper."],
            ["course_code" => "DGAWDU", "course_name" => "Diploma in Graphical Animated Web Designing"],
            ["course_code" => "DINDNU", "course_name" => "Diploma in Dance"],
            ["course_code" => "DINFDU", "course_name" => "Diploma in Fashion Designing"],
            ["course_code" => "DININSU", "course_name" => "Diploma in Instrument "],
            ["course_code" => "DINMUSU", "course_name" => "Diploma in Music"],
            ["course_code" => "DINTDU", "course_name" => "Diploma in Theater & Drama"],
            ["course_code" => "DIPATU", "course_name" => "Diploma in Aquaculture Technology"],
            ["course_code" => "DIPBFU", "course_name" => "Diploma in Banking and Finance"],
            ["course_code" => "DIPDTU", "course_name" => "Diploma in Dairy Technology"],
            ["course_code" => "DIPFOOU", "course_name" => "Diploma in Front Office Operation"],
            ["course_code" => "DIPITGPU", "course_name" => "Diploma in Accounting and Taxation"],
            ["course_code" => "DIPKKU", "course_name" => "Diploma in Karmakanda"],
            ["course_code" => "DIPPHARU", "course_name" => "Diploma in Pharmacy"],
            ["course_code" => "DIPRU", "course_name" => "Diploma In Russian"],
            ["course_code" => "DISCLU", "course_name" => "Diploma in Infor. Security and Cyber Law"],
            ["course_code" => "DITMU", "course_name" => "Diploma in IT Management"],
            ["course_code" => "DJMCU", "course_name" => "Diploma of Journalism and Mass Communication"],
            ["course_code" => "DMPLU", "course_name" => "Diploma in Modern Programming Languages"],
            ["course_code" => "DMTCSU", "course_name" => "Diploma in Modern Technologies in Comp. Science"],
            ["course_code" => "DNPATHU", "course_name" => "Diploma in Naturopathy"],
            ["course_code" => "DOAU", "course_name" => "Diploma in Office Automation"],
            ["course_code" => "DTEU", "course_name" => "Diploma in Tally and ERP"],
            ["course_code" => "DWDDU", "course_name" => "Diploma in Web Designing & Web Development"],
            ["course_code" => "DYOGAU", "course_name" => "Diploma in Yoga - U"],
            ["course_code" => "DYSMU", "course_name" => "Diploma in Yoga and Stress Management"],
            ["course_code" => "LLMU", "course_name" => "L.L.M.-U"],
            ["course_code" => "MAU", "course_name" => "M.A.-U"],
            ["course_code" => "MBAU", "course_name" => "MBA-U"],
            ["course_code" => "MCOMU", "course_name" => "M.Com.-U"],
            ["course_code" => "MFAU", "course_name" => "Master of Fine Arts"],
            ["course_code" => "MHSU", "course_name" => "Master of Hindu Studies"],
            ["course_code" => "MLSCU", "course_name" => "M..Lib.& Info.Sc"],
            ["course_code" => "MPESU", "course_name" => "Master of Physical Education & Sports"],
            ["course_code" => "MPHARMU", "course_name" => "M.Pharma-U"],
            ["course_code" => "MSCU", "course_name" => "M.Sc.-U"],
            ["course_code" => "MSWU", "course_name" => "M.S.W-U"],
            ["course_code" => "PGDAITU", "course_name" => "PG Diploma in Advanced Instrumentation Techniques"],
            ["course_code" => "PGDAMU", "course_name" => "PG Diploma in Applied Mycology"],
            ["course_code" => "PGDARU", "course_name" => "PG Diploma in Archaeology"],
            ["course_code" => "PGDAU", "course_name" => "PG Diploma in Astrophysics"],
            ["course_code" => "PGDBMU", "course_name" => "PG Diploma in Biomathematics (PGDBM)"],
            ["course_code" => "PGDCCIU", "course_name" => "PG Diploma in Cloud Computing & IoT"],
            ["course_code" => "PGDCLPU", "course_name" => "PG Diploma in Computational Linguistics (Part Time)"],
            ["course_code" => "PGDCLU", "course_name" => "PG Diploma in Computational Linguistics"],
            ["course_code" => "PGDCPDTU", "course_name" => "PG Dip. Clinical Pathology & Diagnostic Technique"],
            ["course_code" => "PGDCSAU", "course_name" => "PGDCSA-U"],
            ["course_code" => "PGDCSU", "course_name" => "PG Diploma in Cyber Security"],
            ["course_code" => "PGDDAU", "course_name" => "PG Diploma in Data Analytics"],
            ["course_code" => "PGDDBAU", "course_name" => "PG Diploma in Database Administration"],
            ["course_code" => "PGDDNTU", "course_name" => "PG Diploma in Dot net Technology"],
            ["course_code" => "PGDEMU", "course_name" => "PG Diploma in Environment Management"],
            ["course_code" => "PGDFSQCU", "course_name" => "PG Diploma in Food Safety and Quality Control"],
            ["course_code" => "PGDGCU", "course_name" => "PG Diploma in Guidance and Counselling-U"],
            ["course_code" => "PGDHMU", "course_name" => "PG Diploma in Heritage Management"],
            ["course_code" => "PGDISCU", "course_name" => "PG Diploma in Information Security and Cyber Law"],
            ["course_code" => "PGDITMU", "course_name" => "PG Diploma in IT Management"],
            ["course_code" => "PGDLANU", "course_name" => "PG Diploma in Library Automation and Networking"],
            ["course_code" => "PGDLGPLU", "course_name" => "PG Diploma in Local Governance & Political Leadership"],
            ["course_code" => "PGDMMU", "course_name" => "PG Diploma Medical Mycology"],
            ["course_code" => "PGDMPLU", "course_name" => "PG Diploma in Modern Programming Languages"],
            ["course_code" => "PGDMTCSU", "course_name" => "PG Dip. in Modern Technologies in Comp. Science"],
            ["course_code" => "PGDMUU", "course_name" => "PG Diploma in Museology"],
            ["course_code" => "PGDRDU", "course_name" => "PG Diploma in Rural Development"],
            ["course_code" => "PGDSCLU", "course_name" => "PG Diploma in Sanskrit Computational Linguistics"],
            ["course_code" => "PGDSTEU", "course_name" => "PG Diploma in Seed Technology"],
            ["course_code" => "PGDTEU", "course_name" => "PG Diploma in Tally and ERP"],
            ["course_code" => "PGDTHMU", "course_name" => "PGD. Tour & H. Mngt."],
            ["course_code" => "PGDTSU", "course_name" => "PG Diploma in Translation Studies"],
            ["course_code" => "PGDVMU", "course_name" => "PG Diploma in Vedic Mathematics (PGDVM)"],
            ["course_code" => "PGDWDDU", "course_name" => "PG Diploma in Web Designing & Web Development"],
            ["course_code" => "PGDYU", "course_name" => "PG Diploma in Yoga"],
            ["course_code" => "SDIPRU", "course_name" => "Sr. Dip. In Russian"],
            ["course_code" => "MTECHU", "course_name" => "MTECH-U"],
            ["course_code" => "BEU", "course_name" => "BE-U"],
        ];
        if (empty($this->getCourseModel()->first())) {
            $this->getCourseModel()->insertBatch($course);
        }
        $subject = [
            ["subject_code" => "HISTORY", "subject_name" => "HISTORY"],
            ["subject_code" => "JYOTIR", "subject_name" => "Jyotirvigyan"],
            ["subject_code" => "MASCOMM", "subject_name" => "Mass Communication and Journalism"],
            ["subject_code" => "PS", "subject_name" => "Police Science"],
            ["subject_code" => "PSCPAD", "subject_name" => "Political Science"],
            ["subject_code" => "PUBADM", "subject_name" => "Public Administration"],
            ["subject_code" => "BFSI", "subject_name" => "BFSI"],
            ["subject_code" => "LOGISTICS", "subject_name" => "Logistics"],
            ["subject_code" => "RETAILOPS", "subject_name" => "Retail Operations"],
            ["subject_code" => "PLAINLT", "subject_name" => "Plain (Lateral Entry)"],
            ["subject_code" => "AGRI", "subject_name" => "Agriculture"],
            ["subject_code" => "BOTONY", "subject_name" => "Botany"],
            ["subject_code" => "COMPSC", "subject_name" => "Computer Science"],
            ["subject_code" => "FORESTRY", "subject_name" => "Forestry"],
            ["subject_code" => "FS", "subject_name" => " Forensic Science"],
            ["subject_code" => "HORTI", "subject_name" => "Horticulture"],
            ["subject_code" => "MATH", "subject_name" => "Maths"],
            ["subject_code" => "BULAW", "subject_name" => "Business Law"],
            ["subject_code" => "MCLAW", "subject_name" => "Cyber Law"],
            ["subject_code" => "AIHCA", "subject_name" => "A.I.H.C.& Archaeology"],
            ["subject_code" => "ECONOMIC", "subject_name" => "Economics"],
            ["subject_code" => "EDUCATION", "subject_name" => "Education"],
            ["subject_code" => "ENGLISH", "subject_name" => "English"],
            ["subject_code" => "HINDI", "subject_name" => "Hindi"],
            ["subject_code" => "HRS", "subject_name" => "Human Rights"],
            ["subject_code" => "JYOTIRVI", "subject_name" => "Jyotirvigyan"],
            ["subject_code" => "MODHIS", "subject_name" => "Modern History"],
            ["subject_code" => "PHILOSOPHY", "subject_name" => "Philosophy"],
            ["subject_code" => "POLTSC", "subject_name" => "Pol.Sc."],
            ["subject_code" => "POPEDU", "subject_name" => "Population Education"],
            ["subject_code" => "PSYCHOLOGY", "subject_name" => "Psychology"],
            ["subject_code" => "SANSKRIT", "subject_name" => "Sanskrit"],
            ["subject_code" => "Sociology", "subject_name" => "SOCIOLOGY"],
            ["subject_code" => "VED", "subject_name" => "Vedic Studies"],
            ["subject_code" => "YOGA", "subject_name" => "YOGA"],
            ["subject_code" => "ABM", "subject_name" => "Agro-Business Management"],
            ["subject_code" => "EVENT", "subject_name" => "Event Management"],
            ["subject_code" => "FINANCIAL", "subject_name" => "Financial Administration"],
            ["subject_code" => "HOSPIMGMT", "subject_name" => "Hospitality Management"],
            ["subject_code" => "HR", "subject_name" => "Human Resource"],
            ["subject_code" => "MARKETING", "subject_name" => "Marketing Management"],
            ["subject_code" => "MEDIA", "subject_name" => "Media Management"],
            ["subject_code" => "PHARMA", "subject_name" => "Pharmaceutics"],
            ["subject_code" => "AGAGRO", "subject_name" => "Ag-Agronomy"],
            ["subject_code" => "AGETMOLGY", "subject_name" => "Ag-Entomology"],
            ["subject_code" => "AGEXTCOMM", "subject_name" => "Ag-Agricultural Extension and Communication"],
            ["subject_code" => "AGHORTI", "subject_name" => "Ag-Horticulture Fruit Science"],
            ["subject_code" => "AGPLANT", "subject_name" => "Ag-Plant Pathology"],
            ["subject_code" => "AGSOIL", "subject_name" => "Ag-Soil Science and Agriculture Chemistry"],
            ["subject_code" => "AGSTATI", "subject_name" => "Ag-Agricultural Statistics"],
            ["subject_code" => "AIML", "subject_name" => "Computer Science with AI & Machine Learning"],
            ["subject_code" => "BIOCHEM", "subject_name" => "Biochemistry"],
            ["subject_code" => "BIOTECH", "subject_name" => "Biotechnology"],
            ["subject_code" => "BOTANY", "subject_name" => "Botany"],
            ["subject_code" => "CHEMISTRY", "subject_name" => "Chemistry"],
            ["subject_code" => "COMSC", "subject_name" => "Computer Science"],
            ["subject_code" => "Crimino.", "subject_name" => "Criminology"],
            ["subject_code" => "DataSc", "subject_name" => "Computer Science with Data Science"],
            ["subject_code" => "ELECTRONIC", "subject_name" => "Electronics"],
            ["subject_code" => "ENVMGT", "subject_name" => "Environment Management"],
            ["subject_code" => "ENVSCI", "subject_name" => "Environment Science"],
            ["subject_code" => "FT", "subject_name" => "Food Technology"],
            ["subject_code" => "GEOGRAPHY", "subject_name" => "Geography"],
            ["subject_code" => "GEOLOGY", "subject_name" => "Geology"],
            ["subject_code" => "HETA", "subject_name" => "Health Economics & Technology Assessment"],
            ["subject_code" => "IS", "subject_name" => "Computer Science with Information Security"],
            ["subject_code" => "IT", "subject_name" => "Information Technology"],
            ["subject_code" => "MATHS", "subject_name" => "Mathematics"],
            ["subject_code" => "MICROBIO", "subject_name" => "Microbiology"],
            ["subject_code" => "PHYSICS", "subject_name" => "Physics"],
            ["subject_code" => "STATISTICS", "subject_name" => "Statistics"],
            ["subject_code" => "ZOOLOGY", "subject_name" => "Zoology"],
            ["subject_code" => "WDST", "subject_name" => "Web Development and Software Testing"],
            ["subject_code" => "PLAIN", "subject_name" => "Plain"],
            ["subject_code" => "AgriculturalEngineering", "subject_name" => "Agricultural Engineering"],
            ["subject_code" => "CivilEngineering", "subject_name" => "Civil Engineering"],
            ["subject_code" => "DigitalCommunication", "subject_name" => "Digital Communication"],
            ["subject_code" => "ElectricalEngineering", "subject_name" => "Electrical Engineering"],
            ["subject_code" => "ElectronicsCommunicationEngineering", "subject_name" => "Electronics & Communication Engineering"],
            ["subject_code" => "ElectronicsAndComputerScienceEngineering", "subject_name" => "Electronics and Computer Science Engineering"],
            ["subject_code" => "IOTAndSensorSystems", "subject_name" => "IOT and Sensor Systems"],
            ["subject_code" => "MechanicalEngineering", "subject_name" => "Mechanical Engineering"],
            ["subject_code" => "PowerSystemAutomation", "subject_name" => "Power System Automation"],
            ["subject_code" => "StructuralEngineering", "subject_name" => "Structural Engineering"],
            ["subject_code" => "ThermalEngineering", "subject_name" => "Thermal Engineering"],
        ];
        if (empty($this->getSubjectModel()->first())) {
            $this->getSubjectModel()->insertBatch($subject);
        }
        $department = [
            ["department_code" => "801", "department_name" => "School of Studies in English(801)"],
            ["department_code" => "802", "department_name" => "Institute of Computer Science(802)"],
            ["department_code" => "803", "department_name" => "School of Studies in Continuing Education(803)"],
            ["department_code" => "804", "department_name" => "School of Studies in Chemistry & Biochemistry(804)"],
            ["department_code" => "805", "department_name" => "School of Studies in Library and Information Sciences(805)"],
            ["department_code" => "806", "department_name" => "School of Studies in Botany(806)"],
            ["department_code" => "807", "department_name" => "School of Studies in Sanskrit , Jyotirvigyan , Ved(807)"],
            ["department_code" => "808", "department_name" => "School of Studies in Jyotirvigyan(808)"],
            ["department_code" => "809", "department_name" => "School of Studies in Ved(809)"],
            ["department_code" => "810", "department_name" => "School of Studies in Mathematics(810)"],
            ["department_code" => "811", "department_name" => "School of Studies in Sociology(811)"],
            ["department_code" => "812", "department_name" => "School of Studies in Political Sci. & Public Adm.(812)"],
            ["department_code" => "813", "department_name" => "School of Studies in A. I. H. C. & Archaeology(813)"],
            ["department_code" => "814", "department_name" => "School of Studies in Economics(814)"],
            ["department_code" => "815", "department_name" => "School of Studies in Hindi(815)"],
            ["department_code" => "816", "department_name" => "School of Studies in Earth Sciences(816)"],
            ["department_code" => "817", "department_name" => "School of Studies in Physics(817)"],
            ["department_code" => "818", "department_name" => "School of Studies in Statistics(818)"],
            ["department_code" => "819", "department_name" => "School of Studies in Zoology & Bio-Technology(819)"],
            ["department_code" => "820", "department_name" => "School of Studies in Philosophy(820)"],
            ["department_code" => "821", "department_name" => "School of Studies in Microbiology(821)"],
            ["department_code" => "822", "department_name" => "Department of Foreign Languages(822)"],
            ["department_code" => "823", "department_name" => "School of Studies in Commerce(823)"],
            ["department_code" => "824", "department_name" => "Institute of Pharmacy(824)"],
            ["department_code" => "825", "department_name" => "Scindia Oriental Research Institute(825)"],
            ["department_code" => "827", "department_name" => "School of Studies in Environment Management(827)"],
            ["department_code" => "828", "department_name" => "Pt. Jawaharlal Nehru Inst. of Business Management(828)"],
            ["department_code" => "829", "department_name" => "School of Engineering & Technology(829)"],
            ["department_code" => "830", "department_name" => "School of Studies in Law(830)"],
            ["department_code" => "831", "department_name" => "Department of Physical Education(831)"],
            ["department_code" => "832", "department_name" => "School of Studies in Agricultural Sciences(832)"],
            ["department_code" => "833", "department_name" => "Centre  For Indic Studies(833)"],
            ["department_code" => "834", "department_name" => "School of Studies in Fine Arts , Performing Arts and Music(834)"],
            ["department_code" => "835", "department_name" => "School of Studies in Forensic Science(835)"],
            ["department_code" => "836", "department_name" => "School of Studies in Food Technology(836)"],
            ["department_code" => "837", "department_name" => "International Institute of Professional Studies(837)"],
            ["department_code" => "838", "department_name" => "School of Studies in Journalism and Mass Communication(838)"],
            ["department_code" => "839", "department_name" => "School of Studies in Education(839)"]
        ];
        if (empty($this->getDepartmentModel()->first())) {
            $this->getDepartmentModel()->insertBatch($department);
        }
    }

    public function down()
    {
        //
    }
}