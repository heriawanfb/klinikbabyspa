-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2021 pada 10.21
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_abc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `kd_diagnosa` varchar(20) NOT NULL,
  `nm_diagnosa` varchar(100) NOT NULL,
  `diagnosaicd10` varchar(200) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`kd_diagnosa`, `nm_diagnosa`, `diagnosaicd10`, `jenis`) VALUES
('A155', 'TBC LARING/KELENJAR LEHER', 'Tuberculosis of larynx, trachea and bronchus', 'LARING FARING'),
('A182', 'TBC LARING/KELENJAR LEHER', 'Tuberculosis of perypheral lymphadenopathy', 'LARING FARING'),
('A186', 'OMSK TBC', 'Tuberculosis of (inner) (middle) ear', 'TELINGA'),
('A360', 'DIFTERI', 'Pharyngeal diphtheria', 'LARING FARING'),
('A361', 'DIFTERI', 'Nasopharyngeal diphtheria', 'LARING FARING'),
('A362', 'DIFTERI', 'Laryngeal diphtheria', 'LARING FARING'),
('B001', 'HERPES ', 'Herpes simpleks infection', 'TELINGA'),
('B028', 'HERPES ', 'Zoster with other complications', 'TELINGA'),
('B26', 'PAROTITIS', 'Mumps', 'LARING FARING'),
('B302', 'FARINGITIS AKUT', 'Viral pharyngoconjunctivitis', 'LARING FARING'),
('B370', 'KELAINAN ORAL CAVITY', 'Cadidal stomatitis', 'LARING FARING'),
('B372', 'OTOMIKOSIS', 'Candidiasis', 'TELINGA'),
('B448', 'OTOMIKOSIS', 'Aspergillosis', 'TELINGA'),
('C000', 'TUMOR GANAS BIBIR', 'Malignant neoplasm of external upper lip', 'TUMOR'),
('C001', 'TUMOR GANAS BIBIR', 'Malignant neoplasm of external lower lip', 'TUMOR'),
('C002', 'TUMOR GANAS BIBIR', 'Malignant neoplasm of external lip, unspecified', 'TUMOR'),
('C003', 'TUMOR GANAS BIBIR', 'Malignant neoplasm of upper lip, inner aspect', 'TUMOR'),
('C004', 'TUMOR GANAS BIBIR', 'Malignant neoplasm of lower lip, inner aspect', 'TUMOR'),
('C005', 'TUMOR GANAS BIBIR', 'Malignant neoplasm of lip, unspecified, inner aspect', 'TUMOR'),
('C006', 'TUMOR GANAS BIBIR', 'Malignant neoplasm of commissure of lip, unspecified', 'TUMOR'),
('C008', 'TUMOR GANAS BIBIR', 'Malignant neoplasm of overlapping sites of lip', 'TUMOR'),
('C009', 'TUMOR GANAS BIBIR', 'Malignant neoplasm of lip, unspecified', 'TUMOR'),
('C01', 'TUMOR GANAS LIDAH', 'Malignant neoplasm of base of tongue', 'TUMOR'),
('C020', 'TUMOR GANAS LIDAH', 'Malignant neoplasm of dorsal surface of tongue', 'TUMOR'),
('C021', 'TUMOR GANAS LIDAH', 'Malignant neoplasm of border of tongue', 'TUMOR'),
('C022', 'TUMOR GANAS LIDAH', 'Malignant neoplasm of ventral surface of tongue', 'TUMOR'),
('C023', 'TUMOR GANAS LIDAH', 'Malignant neoplasm of anterior two-thirds of tongue', 'TUMOR'),
('C024', 'TUMOR GANAS LIDAH', 'Malignant neoplasm of lingual tonsil', 'TUMOR'),
('C028', 'TUMOR GANAS LIDAH', 'Malignant neoplasm of overlapping sites of tongue', 'TUMOR'),
('C029', 'TUMOR GANAS LIDAH', 'Malignant neoplasm of tongue, unspecified', 'TUMOR'),
('C030', 'TUMOR GANAS GUSI', 'Malignant neoplasm of upper gum', 'TUMOR'),
('C031', 'TUMOR GANAS GUSI', 'Malignant neoplasm of lower gum', 'TUMOR'),
('C039', 'TUMOR GANAS GUSI', 'Malignant neoplasm of gum, unspecified', 'TUMOR'),
('C040', 'TUMOR GANAS DASAR MULUT', 'Malignant neoplasm of anterior floor of mouth', 'TUMOR'),
('C041', 'TUMOR GANAS DASAR MULUT', 'Malignant neoplasm of lateral floor of mouth', 'TUMOR'),
('C048', 'TUMOR GANAS DASAR MULUT', 'Malignant neoplasm of overlapping sites of floor of mouth', 'TUMOR'),
('C049', 'TUMOR GANAS DASAR MULUT', 'Malignant neoplasm of floor of mouth, unspecified', 'TUMOR'),
('C050', 'TUMOR GANAS PALATUM & UVULA', 'Malignant neoplasm of hard palate', 'TUMOR'),
('C051', 'TUMOR GANAS PALATUM & UVULA', 'Malignant neoplasm of soft palate', 'TUMOR'),
('C052', 'TUMOR GANAS PALATUM & UVULA', 'Malignant neoplasm of uvula', 'TUMOR'),
('C058', 'TUMOR GANAS PALATUM & UVULA', 'Malignant neoplasm of overlapping sites of palate', 'TUMOR'),
('C059', 'TUMOR GANAS PALATUM & UVULA', 'Malignant neoplasm of palate, unspecified', 'TUMOR'),
('C060', 'TUMOR GANAS MUKOSA MULUT', 'Malignant neoplasm of cheek mucosa', 'TUMOR'),
('C061', 'TUMOR GANAS MUKOSA MULUT', 'Malignant neoplasm of vestibule of mouth', 'TUMOR'),
('C062', 'TUMOR GANAS MUKOSA MULUT', 'Malignant neoplasm of retromolar area', 'TUMOR'),
('C0680', 'TUMOR GANAS MUKOSA MULUT', 'Malignant neoplasm of overlapping sites of mouth', 'TUMOR'),
('C0689', 'TUMOR GANAS MUKOSA MULUT', 'Malignant neoplasm of overlapping sites of other parts of mouth', 'TUMOR'),
('C069', 'TUMOR GANAS MUKOSA MULUT', 'Malignant neoplasm of mouth, unspecified', 'TUMOR'),
('C07', 'TUMOR GANAS KELENJAR LIUR', 'Malignant neoplasm of parotid gland', 'TUMOR'),
('C080', 'TUMOR GANAS KELENJAR LIUR', 'Malignant neoplasm of submandibular gland', 'TUMOR'),
('C081', 'TUMOR GANAS KELENJAR LIUR', 'Malignant neoplasm of sublingual gland', 'TUMOR'),
('C089', 'TUMOR GANAS KELENJAR LIUR', 'Malignant neoplasm of major salivary gland, unspecified', 'TUMOR'),
('C090', 'TUMOR GANAS TONSIL', 'Malignant neoplasm of tonsillar fossa', 'TUMOR'),
('C091', 'TUMOR GANAS TONSIL', 'Malignant neoplasm of tonsillar pillar (anterior) (posterior)', 'TUMOR'),
('C098', 'TUMOR GANAS TONSIL', 'Malignant neoplasm of overlapping sites of tonsil', 'TUMOR'),
('C099', 'TUMOR GANAS TONSIL', 'Malignant neoplasm of tonsil, unspecified', 'TUMOR'),
('C100', 'TUMOR GANAS OROFARING', 'Malignant neoplasm of vallecula', 'TUMOR'),
('C101', 'TUMOR GANAS OROFARING', 'Malignant neoplasm of anterior surface of epiglottis', 'TUMOR'),
('C102', 'TUMOR GANAS OROFARING', 'Malignant neoplasm of lateral wall of oropharynx', 'TUMOR'),
('C103', 'TUMOR GANAS OROFARING', 'Malignant neoplasm of posterior wall of oropharynx', 'TUMOR'),
('C104', 'TUMOR GANAS OROFARING', 'Malignant neoplasm of branchial cleft', 'TUMOR'),
('C108', 'TUMOR GANAS OROFARING', 'Malignant neoplasm of overlapping sites of oropharynx', 'TUMOR'),
('C109', 'TUMOR GANAS OROFARING', 'Malignant neoplasm of oropharynx, unspecified', 'TUMOR'),
('C110', 'TUMOR GANAS NASOFARING', 'Malignant neoplasm of superior wall of nasopharynx', 'TUMOR'),
('C111', 'TUMOR GANAS NASOFARING', 'Malignant neoplasm of posterior wall of nasopharynx', 'TUMOR'),
('C112', 'TUMOR GANAS NASOFARING', 'Malignant neoplasm of lateral wall of nasopharynx', 'TUMOR'),
('C113', 'TUMOR GANAS NASOFARING', 'Malignant neoplasm of anterior wall of nasopharynx', 'TUMOR'),
('C118', 'TUMOR GANAS NASOFARING', 'Malignant neoplasm of overlapping sites of nasopharynx', 'TUMOR'),
('C119', 'TUMOR GANAS NASOFARING', 'Malignant neoplasm of nasopharynx, unspecified', 'TUMOR'),
('C12', 'TUMOR GANAS HIPOFARING', 'Malignant neoplasm of pyriform sinus', 'TUMOR'),
('C130', 'TUMOR GANAS HIPOFARING', 'Malignant neoplasm of postcricoid region', 'TUMOR'),
('C131', 'TUMOR GANAS HIPOFARING', 'Malignant neoplasm of aryepiglottic fold, hypopharyngeal aspect', 'TUMOR'),
('C132', 'TUMOR GANAS HIPOFARING', 'Malignant neoplasm of posterior wall of hypopharynx', 'TUMOR'),
('C138', 'TUMOR GANAS HIPOFARING', 'Malignant neoplasm of overlapping sites of hypopharynx', 'TUMOR'),
('C139', 'TUMOR GANAS HIPOFARING', 'Malignant neoplasm of hypopharynx, unspecified', 'TUMOR'),
('C159', 'TUMOR GANAS ESOFAGUS', 'Malignant neoplasm of esophagus, unspecified', 'TUMOR'),
('C300', 'TUMOR GANAS HIDUNG', 'Malignant neoplasm of nasal cavity', 'TUMOR'),
('C301', 'TUMOR GANAS TELINGA TENGAH', 'Malignant neoplasm of middle ear', 'TUMOR'),
('C310', 'TUMOR GANAS SINUS', 'Malignant neoplasm of maxillary sinus', 'TUMOR'),
('C311', 'TUMOR GANAS SINUS', 'Malignant neoplasm of ethmoidal sinus', 'TUMOR'),
('C312', 'TUMOR GANAS SINUS', 'Malignant neoplasm of frontal sinus', 'TUMOR'),
('C313', 'TUMOR GANAS SINUS', 'Malignant neoplasm of sphenoid sinus', 'TUMOR'),
('C318', 'TUMOR GANAS SINUS', 'Malignant neoplasm of overlapping sites of accessory sinuses', 'TUMOR'),
('C319', 'TUMOR GANAS SINUS', 'Malignant neoplasm of accessory sinus, unspecified', 'TUMOR'),
('C320', 'TUMOR GANAS LARING', 'Malignant neoplasm of glottis', 'TUMOR'),
('C321', 'TUMOR GANAS LARING', 'Malignant neoplasm of supraglottis', 'TUMOR'),
('C322', 'TUMOR GANAS LARING', 'Malignant neoplasm of subglottis', 'TUMOR'),
('C323', 'TUMOR GANAS LARING', 'Malignant neoplasm of laryngeal cartilage', 'TUMOR'),
('C328', 'TUMOR GANAS LARING', 'Malignant neoplasm of overlapping sites of larynx', 'TUMOR'),
('C329', 'TUMOR GANAS LARING', 'Malignant neoplasm of larynx, unspecified', 'TUMOR'),
('C411', 'TUMOR GANAS MANDIBULA', 'Malignant neoplasm of mandible', 'TUMOR'),
('C4421', 'TUMOR GANAS LIANG TELINGA', 'Basal cell carcinoma skin of ear and external auricular canal', 'TUMOR'),
('C4422', 'TUMOR GANAS LIANG TELINGA', 'Squamous cell carcinoma of skin of ear and external canal', 'TUMOR'),
('C73', 'TUMOR GANAS TIROID', 'Malignant neoplasm of thyroid gland', 'TUMOR'),
('C81', 'LIMFOMA', 'Hodgkin\'s lymphoma', 'TUMOR'),
('C82', 'LIMFOMA', 'Follicular lymphoma', 'TUMOR'),
('C83', 'LIMFOMA', 'Non Follicular lymphoma', 'TUMOR'),
('C84', 'LIMFOMA', 'Mature T/NK-cell lymphoma', 'TUMOR'),
('C85', 'LIMFOMA', 'Other and unspecifiedof non-Hodgin\'s Lymphoma', 'TUMOR'),
('D100', 'TUMOR JINAK (1)', 'lip', 'TUMOR'),
('D101', 'TUMOR JINAK (1)', 'tongue', 'TUMOR'),
('D102', 'TUMOR JINAK (1)', 'floor of mouth', 'TUMOR'),
('D103', 'TUMOR JINAK (1)', 'unspecified part of mouth', 'TUMOR'),
('D104', 'TUMOR JINAK (1)', 'tonsil', 'TUMOR'),
('D105', 'TUMOR JINAK (1)', 'oropharynx', 'TUMOR'),
('D106', 'TUMOR JINAK (1)', 'nasopharynx', 'TUMOR'),
('D107', 'TUMOR JINAK (1)', 'hypopharynx', 'TUMOR'),
('D110', 'TUMOR JINAK (1)', 'parotid gland', 'TUMOR'),
('D117', 'TUMOR JINAK (1)', 'sublingual, submandibular glands', 'TUMOR'),
('D140', 'TUMOR JINAK (1)', 'middle ear, nasal cavity and accesory sinus', 'TUMOR'),
('D141', 'TUMOR JINAK (1)', 'larynx', 'TUMOR'),
('D150', 'TUMOR JINAK (1)', 'thymus', 'TUMOR'),
('D170', 'TUMOR JINAK (1)', 'lipomatous', 'TUMOR'),
('D180', 'TUMOR JINAK (1)', 'hemangioma', 'TUMOR'),
('D181', 'TUMOR JINAK (2)', 'lymphangioma', 'TUMOR'),
('D232', 'TUMOR JINAK (2)', 'skin and external auricular canal', 'TUMOR'),
('D315', 'TUMOR JINAK (2)', 'lacrimal gland and duct', 'TUMOR'),
('D333', 'TUMOR JINAK (2)', 'cranial nerves', 'TUMOR'),
('D34', 'TUMOR JINAK (2)', 'thyroid gland', 'TUMOR'),
('D351', 'TUMOR JINAK (2)', 'parathyroid gland', 'TUMOR'),
('D352', 'TUMOR JINAK (2)', 'pituitary gland', 'TUMOR'),
('D353', 'TUMOR JINAK (2)', 'craniopharyngeal duct', 'TUMOR'),
('D354', 'TUMOR JINAK (2)', 'pineal gland', 'TUMOR'),
('D360', 'TUMOR JINAK (2)', 'lymph nodes', 'TUMOR'),
('D3611', 'TUMOR JINAK (2)', 'peripheral & autonom nerves head neck face', 'TUMOR'),
('E040', 'KELAINAN TIROID', 'Nontoxic diffuse goiter', 'LARING FARING'),
('E041', 'KELAINAN TIROID', 'Nontoxic single thyroid nodule', 'LARING FARING'),
('E042', 'KELAINAN TIROID', 'Nontoxic multinodular goiter', 'LARING FARING'),
('E050', 'KELAINAN TIROID', 'Thyrotoxicosis with diffuse goiter', 'LARING FARING'),
('E051', 'KELAINAN TIROID', 'Thyrotoxicosis with toxic single thyroid nodule', 'LARING FARING'),
('E052', 'KELAINAN TIROID', 'Thyrotoxicosis with toxic multinodular goiter', 'LARING FARING'),
('F809', 'DELAYED SPEECH', 'Developmental disorder of speech and language, unspecified', 'TELINGA'),
('G4733', 'OSAS', 'Obstructive sleep apnea (adult) (pediatric)', 'HIDUNG'),
('G960', 'LCS LEAKAGE', 'Cerebrospinal fluid leak', 'HIDUNG'),
('H050', 'SELULITIS ORBITA', 'Cellulitis of orbit', 'HIDUNG'),
('H519', 'PARESIS FASIALIS', 'Disorder of facial nerve, unspecified', 'TELINGA'),
('H600', 'OE SIRKUMSKRIP', 'Abscess of external ear', 'TELINGA'),
('H601', 'OE SIRKUMSKRIP', 'Cellulitis of external ear', 'TELINGA'),
('H602', 'OE MALIGNA', 'Malignant otitis externa', 'TELINGA'),
('H603', 'OE DIFUSA', 'Diffuse otitis externa, Swimmer ear, Hemorragic', 'TELINGA'),
('H604', 'KOLESTEATOMA EKSTERNA', 'Cholesteatoma of external ear', 'TELINGA'),
('H610', 'PERIKONDRITIS', 'Pericondritis of external ear', 'TELINGA'),
('H611', 'PSEUDOKISTA/HEMATOMA', 'Noninfective disorders of pinna', 'TELINGA'),
('H612', 'SERUMEN PROP', 'Impacted cerumen', 'TELINGA'),
('H613', 'STENOSIS LIANG TELINGA', 'Acquired stenosis of secondary trauma, inflammation, infection', 'TELINGA'),
('H618', 'EKSOTOSIS LIANG TELINGA', 'Exostosis of external canal', 'TELINGA'),
('H650', 'OME AKUT', 'Acute serous otitis media (barotaruma)', 'TELINGA'),
('H651', 'OME AKUT', 'Acute and subacute allergic otitis media (mucoid) (serous)', 'TELINGA'),
('H652', 'OME KRONIK', 'Chronic serous otitis media', 'TELINGA'),
('H653', 'OME KRONIK', 'Chronic mucoid otitis  media (Glue Ear)', 'TELINGA'),
('H654', 'OME KRONIK', 'Chronic allergic otitis media', 'TELINGA'),
('H660', 'OMA', 'Acute suppurative otitis media', 'TELINGA'),
('H661', 'OMSK BENIGNA AKTIF', 'Chronic tubotympanic suppurative otitis media', 'TELINGA'),
('H662', 'OMSK MALIGNA', 'Chronic atticoantral suppurative otitis media', 'TELINGA'),
('H680', 'OKLUSI TUBA ', 'Eustachian salpingitis', 'TELINGA'),
('H681', 'OKLUSI TUBA ', 'Obstruction of Eustachius tube : compression, stenosis, stricture', 'TELINGA'),
('H690', 'TUBA PATOULUS', 'Patulous Eustachian tube', 'TELINGA'),
('H700', 'ABSES/FISTEL RETROAURIKULAR', 'Acute mastoiditis : abcess of mastoid', 'TELINGA'),
('H701', 'ABSES/FISTEL RETROAURIKULAR', 'Chronic mastoiditis : Fistula of mastoid', 'TELINGA'),
('H71', 'OMSK MALIGNA', 'Cholesteatoma of middle ear', 'TELINGA'),
('H720', 'OMSK BENIGNA TENANG', 'Central perforation of tympanic membrane', 'TELINGA'),
('H721', 'OMSK MALIGNA', 'Attic perforation of tympanic membrane', 'TELINGA'),
('H722', 'OMSK MALIGNA', 'Other marginal perforations of tympanic membrane', 'TELINGA'),
('H728', 'OMSK MALIGNA', 'Total & multiple perforations of tympanic membrane', 'TELINGA'),
('H730', 'MIRINGITIS AKUT', 'Acute myringitis', 'TELINGA'),
('H731', 'MIRINGITIS KRONIK', 'Chronic myringitis', 'TELINGA'),
('H740', 'TIMPANOSKLEROSIS', 'Tympanosclerosis', 'TELINGA'),
('H741', 'OTITIS MEDIA ADHESIVE', 'Adhesive middle ear disease', 'TELINGA'),
('H742', 'GANGGUAN TULANG PENDENGARAN', 'Discontinuity and dislocation of ear ossicles', 'TELINGA'),
('H743', 'GANGGUAN TULANG PENDENGARAN', 'Ankylosis and partial loss of ear ossicles', 'TELINGA'),
('H744', 'OMSK MALIGNA', 'Polyp of middle ear', 'TELINGA'),
('H800', 'OTOSLEROSIS', 'Otosclerosis involving oval window, nonobliterative', 'TELINGA'),
('H801', 'OTOSLEROSIS', 'Otosclerosis involving oval window, obliterative', 'TELINGA'),
('H802', 'OTOSLEROSIS', 'Cochlear otosclerosis', 'TELINGA'),
('H810', 'GANGGUAN KESEIMBANGAN', 'Meniere\'s disease', 'TELINGA'),
('H811', 'GANGGUAN KESEIMBANGAN', 'Benign paroxysmal vertigo', 'TELINGA'),
('H812', 'GANGGUAN KESEIMBANGAN', 'Vestibular neuronitis', 'TELINGA'),
('H813', 'GANGGUAN KESEIMBANGAN', 'Other peripheral vertigo', 'TELINGA'),
('H814', 'GANGGUAN KESEIMBANGAN', 'Vertigo of central origin', 'TELINGA'),
('H830', 'GANGGUAN KESEIMBANGAN', 'Labyrinthitis', 'TELINGA'),
('H831', 'GANGGUAN KESEIMBANGAN', 'Labyrinthine fistula', 'TELINGA'),
('H832', 'GANGGUAN KESEIMBANGAN', 'Labyrinthine dysfunction : paresis kanal', 'TELINGA'),
('H833', 'GANGGUAN PENDENGARAN', 'Noise effects on inner ear : acoustic trauma, NIHL', 'TELINGA'),
('H900', 'GANGGUAN PENDENGARAN', 'Conductive hearing loss, bilateral', 'TELINGA'),
('H901', 'GANGGUAN PENDENGARAN', 'Conductive hearing loss, unilateral,  normal on contralateral', 'TELINGA'),
('H903', 'GANGGUAN PENDENGARAN', 'Sensorineural hearing loss, bilateral', 'TELINGA'),
('H904', 'GANGGUAN PENDENGARAN', 'Sensorineural hearing loss, unilateral normal on contralateral ', 'TELINGA'),
('H906', 'GANGGUAN PENDENGARAN', 'Mixed hearing loss, bilateral', 'TELINGA'),
('H907', 'GANGGUAN PENDENGARAN', 'Mixed hearing loss, unilateral, normal on the contralateral', 'TELINGA'),
('H910', 'GANGGUAN PENDENGARAN', 'Ototoxic hearing loss', 'TELINGA'),
('H911', 'GANGGUAN PENDENGARAN', 'Presbycusis', 'TELINGA'),
('H912', 'GANGGUAN PENDENGARAN', 'Sudden idiopathic hearing loss', 'TELINGA'),
('H920', 'OTALGIA', 'Otalgia', 'TELINGA'),
('H931', 'TINITUS', 'Tinnitus', 'TELINGA'),
('H950', 'PASCA OPERASI MASTOID', 'Recurrent cholesteatoma of postmastoidectomy cavity', 'TELINGA'),
('H951', 'PASCA OPERASI MASTOID', 'Chronic inflam, granulation, mucosal cyst of postmastoidectomy', 'TELINGA'),
('J00', 'FARINGITIS AKUT', 'Acute nasopharyngitis [common cold]', 'LARING FARING'),
('J01', 'SINUSITIS AKUT', 'Acute sinusitis', 'HIDUNG'),
('J010', 'SINUSITIS AKUT', 'Acute maxillary sinusitis', 'HIDUNG'),
('J011', 'SINUSITIS AKUT', 'Acute frontal sinusitis', 'HIDUNG'),
('J012', 'SINUSITIS AKUT', 'Acute ethmoidal sinusitis', 'HIDUNG'),
('J013', 'SINUSITIS AKUT', 'Acute sphenoidal sinusitis, unspecified', 'HIDUNG'),
('J014', 'SINUSITIS AKUT', 'Acute pansinusitis, unspecified', 'HIDUNG'),
('J018', 'SINUSITIS AKUT', 'Other acute sinusitis, more than one sinus, not pansinusitis', 'HIDUNG'),
('J020', 'FARINGITIS AKUT', 'Streptococcal pharyngitis', 'LARING FARING'),
('J028', 'FARINGITIS AKUT', 'Acute pharyngitis due to other specified organisms', 'LARING FARING'),
('J029', 'FARINGITIS AKUT', 'Acute pharyngitis, unspecified', 'LARING FARING'),
('J030', 'TONSILITIS AKUT', 'Acute streptococcal tonsillitis', 'LARING FARING'),
('J038', 'TONSILITIS AKUT', 'Acute tonsillitis due to other specified organisms', 'LARING FARING'),
('J039', 'TONSILITIS AKUT', 'Acute tonsillitis, unspecified', 'LARING FARING'),
('J040', 'LARINGITIS AKUT', 'Acute laryngitis', 'LARING FARING'),
('J050', 'LARINGITIS AKUT', 'Acute obstructive laryngitis [croup]', 'LARING FARING'),
('J060', 'LARINGITIS AKUT', 'Acute laryngopharyngitis', 'LARING FARING'),
('J300', 'RINITIS VASOMOTOR', 'Vasomotor rhinitis', 'HIDUNG'),
('J304', 'RINITIS ALERGI', 'Allergic rhinitis, unspecified', 'HIDUNG'),
('J310', 'RINOSINUSITIS KRONIK', 'Chronic rhinitis : atropic, granulomatous', 'HIDUNG'),
('J311', 'FARINGITIS KRONIK', 'Chronic nasopharyngitis ', 'LARING FARING'),
('J312', 'FARINGITIS KRONIK', 'Chronic pharyngitis : atrophi, granular, hipertrophic', 'LARING FARING'),
('J320', 'RINOSINUSITIS KRONIK', 'Chronic maxillary sinusitis', 'HIDUNG'),
('J321', 'RINOSINUSITIS KRONIK', 'Chronic frontal sinusitis', 'HIDUNG'),
('J322', 'RINOSINUSITIS KRONIK', 'Chronic ethmoidal sinusitis', 'HIDUNG'),
('J323', 'RINOSINUSITIS KRONIK', 'Chronic sphenoidal sinusitis', 'HIDUNG'),
('J324', 'RINOSINUSITIS KRONIK', 'Chronic pansinusitis', 'HIDUNG'),
('J328', 'RINOSINUSITIS KRONIK', 'Other chronic sinusitis, more than one sinus, not pansinusitis', 'HIDUNG'),
('J329', 'RINOSINUSITIS KRONIK', 'Chronic sinusitis, unspecified ', 'HIDUNG'),
('J330', 'RINOSINUSITIS KRONIK', 'Polyp of nasal cavity : choanal, nasopharyngeal', 'HIDUNG'),
('J331', 'RINOSINUSITIS KRONIK', 'Polypoid sinus degeneration : Woakes\' Syndrome', 'HIDUNG'),
('J338', 'RINOSINUSITIS KRONIK', 'Other polyp of sinus : polyp of  ethmoidal, maxillary, spenoidal', 'HIDUNG'),
('J339', 'RINOSINUSITIS KRONIK', 'Nasal polyp, unspecified', 'HIDUNG'),
('J340', 'ABSES/FURUNKEL', 'Abscess, furuncle and carbuncle of nose', 'HIDUNG'),
('J342', 'SEPTUM DEVIASI', 'Deviated nasal septum', 'HIDUNG'),
('J343', 'HIPERTROFI KONKA', 'Hypertrophy of nasal turbinates', 'HIDUNG'),
('J348', 'RINOLITH/PERFORASI SEPTUM', 'Perforation of nasal septum, rinolith', 'HIDUNG'),
('J350', 'TONSILITIS KRONIK', 'Chronic tonsillitis', 'LARING FARING'),
('J351', 'HIPERTROFI TONSIL', 'Hypertrophy of tonsils', 'LARING FARING'),
('J352', 'HIPERTROFI ADENOID', 'Hypertrophy of adenoids', 'LARING FARING'),
('J353', 'HIPERTROFI TONSIL ADENOID', 'Hypertrophy of tonsils with hypertrophy of adenoids', 'LARING FARING'),
('J36', 'ABSES LEHER DALAM', 'Peritonsillar abscess', 'LARING FARING'),
('J370', 'LARINGITIS KRONIK', 'Chronic laryngitis', 'LARING FARING'),
('J380', 'KELAINAN LARING', 'Paralysis of vocal cords and larynx', 'LARING FARING'),
('J381', 'KELAINAN LARING', 'Polyp of vocal cord and larynx', 'LARING FARING'),
('J382', 'KELAINAN LARING', 'Nodules of vocal cords', 'LARING FARING'),
('J383', 'KELAINAN LARING', 'Other diseases of vocal cords', 'LARING FARING'),
('J384', 'KELAINAN LARING', 'Edema of larynx', 'LARING FARING'),
('J385', 'KELAINAN LARING', 'Laryngeal spasm', 'LARING FARING'),
('J386', 'KELAINAN LARING', 'Stenosis of larynx', 'LARING FARING'),
('J387', 'KELAINAN LARING', 'Other diseases of larynx : abscess, cellulitis, perichondritis', 'LARING FARING'),
('J390', 'ABSES LEHER DALAM', 'Retropharyngeal and parapharyngeal abscess', 'LARING FARING'),
('J393', 'ANAFILAKSIS SALURAN NAPAS', 'Upper respiratory tract hypersensitivity reaction, site unspecified', 'LARING FARING'),
('J450', 'RINITIS ALERGI', 'Allergic rhinits with asthma', 'HIDUNG'),
('J950', 'KOMPLIKASI TRAKEOSTROMI', 'Tracheostomy malfunction : haemorrhage, obstruction, fistula ', 'LARING FARING'),
('J960', 'OBSTRUKSI JALAN NAFAS ATAS', 'Acute respiratory failure', 'LARING FARING'),
('J961', 'OBSTRUKSI JALAN NAFAS ATAS', 'Chronic respiratory failure', 'LARING FARING'),
('K110', 'KELAINAN KELENJAR LIUR', 'Atrophy of salivary gland', 'LARING FARING'),
('K111', 'KELAINAN KELENJAR LIUR', 'Hypertrophy of salivary gland', 'LARING FARING'),
('K112', 'KELAINAN KELENJAR LIUR', 'Sialoadenitis', 'LARING FARING'),
('K113', 'KELAINAN KELENJAR LIUR', 'Abscess of salivary gland', 'LARING FARING'),
('K114', 'KELAINAN KELENJAR LIUR', 'Fistula of salivary gland', 'LARING FARING'),
('K115', 'KELAINAN KELENJAR LIUR', 'Sialolithiasis', 'LARING FARING'),
('K116', 'KELAINAN KELENJAR LIUR', 'Mucocele of salivary gland', 'LARING FARING'),
('K120', 'KELAINAN ORAL CAVITY', 'Recurrent oral aphthae : aphthos stomatitis', 'LARING FARING'),
('K122', 'ABSES LEHER DALAM', 'Cellulitis and abscess of mouth (submandibular abscess)', 'LARING FARING'),
('K132', 'KELAINAN ORAL CAVITY', 'Leukoplakia of oral mucosa, including tongue', 'LARING FARING'),
('K210', 'REFLUKS LARING-FARING', 'Gastro-esophageal reflux disease', 'LARING FARING'),
('K220', 'KELAINAN ESOFAGUS', 'Achalasia of cardia', 'LARING FARING'),
('K223', 'KELAINAN ESOFAGUS', 'Perforation of esophagus', 'LARING FARING'),
('K225', 'KELAINAN ESOFAGUS', 'Diverticulum of esophagus, acquired', 'LARING FARING'),
('M266', 'KELAINAN TIROID', 'Temporomandibular joint disorder', 'LARING FARING'),
('M950', 'DEFORMITAS HIDUNG', 'Acquired deformity of nose', 'HIDUNG'),
('M951', 'DEFORMITAS TELINGA', 'Cauliflower ear', 'TELINGA'),
('Q160', 'KELAINAN KONGENITAL TELINGA', 'Congenital absence of ear auricle (anotia)', 'TELINGA'),
('Q161', 'KELAINAN KONGENITAL TELINGA', 'Congenital absence, atresia and stricture of auditory canal', 'TELINGA'),
('Q162', 'KELAINAN KONGENITAL TELINGA', 'Absence of eustachian tube', 'TELINGA'),
('Q163', 'KELAINAN KONGENITAL TELINGA', 'Congenital malformation of ear ossicles', 'TELINGA'),
('Q164', 'KELAINAN KONGENITAL TELINGA', 'Other congenital malformations of middle ear', 'TELINGA'),
('Q165', 'KELAINAN KONGENITAL TELINGA', 'Congenital malformation of inner ear', 'TELINGA'),
('Q169', 'KELAINAN KONGENITAL TELINGA', 'Congenital malformation of ear causing impairment of hearing', 'TELINGA'),
('Q170', 'KELAINAN KONGENITAL TELINGA', 'Accessory auricle', 'TELINGA'),
('Q171', 'KELAINAN KONGENITAL TELINGA', 'Macrotia', 'TELINGA'),
('Q172', 'KELAINAN KONGENITAL TELINGA', 'Microtia', 'TELINGA'),
('Q175', 'KELAINAN KONGENITAL TELINGA', 'Prominent ear', 'TELINGA'),
('Q180', 'KELAINAN KONGENITAL TELINGA', 'Sinus, fistula and cyst of branchial cleft', 'TELINGA'),
('Q181', 'KELAINAN KONGENITAL TELINGA', 'Preauricular sinus and cyst', 'TELINGA'),
('Q182', 'KELAINAN KONGENITAL TELINGA', 'Other branchial cleft malformations', 'TELINGA'),
('Q300', 'ATRESIA KOANA', 'Choanal Atresia', 'HIDUNG'),
('Q310', 'KELAINAN KONGENITAL LARING FARING', 'Web of larynx', 'LARING FARING'),
('Q311', 'KELAINAN KONGENITAL LARING FARING', 'Congenital subglottic stenosis', 'LARING FARING'),
('Q312', 'KELAINAN KONGENITAL LARING FARING', 'Laryngeal hypoplasia', 'LARING FARING'),
('Q313', 'KELAINAN KONGENITAL LARING FARING', 'Laryngocele', 'LARING FARING'),
('Q315', 'KELAINAN KONGENITAL LARING FARING', 'Congenital laryngomalacia', 'LARING FARING'),
('Q320', 'KELAINAN KONGENITAL LARING FARING', 'Congenital tracheomalacia', 'LARING FARING'),
('Q35', 'CELAH BIBIR & LANGIT-LANGIT', 'Cleft palate', 'LARING FARING'),
('Q36', 'CELAH BIBIR & LANGIT-LANGIT', 'Cleft lip', 'LARING FARING'),
('Q37', 'CELAH BIBIR & LANGIT-LANGIT', 'Cleft palate with cleft lip', 'LARING FARING'),
('Q387', 'KELAINAN KONGENITAL LARING FARING', 'Congenital pharyngeal pouch', 'LARING FARING'),
('R040', 'EPISTAKSIS', 'Epistaxis', 'HIDUNG'),
('R13', 'DISFAGIA', 'Dysphagia', 'LARING FARING'),
('S003', 'TRAUMA HIDUNG', 'Superficial injury of nose', 'HIDUNG'),
('S004', 'TRAUMA TELINGA', 'Superficial injury of ear', 'TELINGA'),
('S005', 'TRAUMA ', 'Superficial injury of lip and oral cavity', 'LARING FARING'),
('S012', 'TRAUMA HIDUNG', 'Open wound of nose', 'HIDUNG'),
('S013', 'TRAUMA TELINGA', 'Open wound of ear', 'TELINGA'),
('S014', 'TRAUMA ', 'Open wound of cheek and temporomandibular area', 'LARING FARING'),
('S015', 'TRAUMA ', 'Open wound of lip and oral cavity', 'LARING FARING'),
('S021', 'TRAUMA HIDUNG', 'Fracture of Base of Skull', 'HIDUNG'),
('S022', 'TRAUMA HIDUNG', 'Fracture of Nasal Bones', 'HIDUNG'),
('S031', 'TRAUMA HIDUNG', 'Dislocation of Septal Cartilage of Nose', 'HIDUNG'),
('S040', 'TRAUMA HIDUNG', 'Injury of optic nerve and pathwayas', 'HIDUNG'),
('S044', 'TRAUMA TELINGA', 'Fracture of Base of Skull', 'TELINGA'),
('S045', 'TRAUMA TELINGA', 'Injury of facial nerve', 'TELINGA'),
('S046', 'TRAUMA TELINGA', 'Injury of acoustic nerve', 'TELINGA'),
('S092', 'TRAUMA TELINGA', 'Traumatic rupture of ear drum', 'TELINGA'),
('S100', 'TRAUMA ', 'Superficial injury of neck, contusion of throat', 'LARING FARING'),
('S110', 'TRAUMA ', 'Open wound of larynx and trachea', 'LARING FARING'),
('S111', 'TRAUMA ', 'Open wound of thyroid gland', 'LARING FARING'),
('S112', 'TRAUMA ', 'Open wound of pharynx and cervical esophagus', 'LARING FARING'),
('T16', 'BENDA ASING TELINGA', 'Foreign body in ear', 'TELINGA'),
('T170', 'BENDA ASING ', 'Foreign Body in nasal sinus', 'HIDUNG'),
('T171', 'BENDA ASING ', 'Foreign Body in nostril', 'HIDUNG'),
('T172', 'BENDA ASING', 'Foreign body in pharynx', 'LARING FARING'),
('T173', 'BENDA ASING', 'Foreign body in larynx', 'LARING FARING'),
('T174', 'BENDA ASING', 'Foreign body in trachea', 'LARING FARING'),
('T175', 'BENDA ASING', 'Foreign body in bronchus', 'LARING FARING'),
('T180', 'BENDA ASING', 'Foreign body in mouth', 'LARING FARING'),
('T181', 'BENDA ASING', 'Foreign body in esophagus', 'LARING FARING'),
('T818', 'KOMPLIKASI TRAKEOSTROMI', 'Emphysema (subcutaneous) resulting from procedure', 'LARING FARING'),
('Z00', 'MCU DEWASA : NORMAL', 'Encounter for general adult medical examination without abnormal findings', 'LAIN-LAIN'),
('Z011', 'MCU PENDENGARAN', 'Encounter for examination of ears and hearing', 'LAIN-LAIN'),
('Z020', 'MCU TUJUAN TERTENTU', 'Encounter for examination for admission to educational institution', 'LAIN-LAIN'),
('Z021', 'MCU TUJUAN TERTENTU', 'Encounter for pre-employment examination', 'LAIN-LAIN'),
('Z022', 'MCU TUJUAN TERTENTU', 'Encounter for examination for admission to residential institution', 'LAIN-LAIN'),
('Z023', 'MCU TUJUAN TERTENTU', 'Encounter for examination for recruitment to armed forces', 'LAIN-LAIN'),
('Z024', 'MCU TUJUAN TERTENTU', 'Encounter for examination for driving license', 'LAIN-LAIN'),
('Z025', 'MCU TUJUAN TERTENTU', 'Encounter for examination for participation in sport', 'LAIN-LAIN'),
('Z026', 'MCU TUJUAN TERTENTU', 'Encounter for examination for insurance purposes', 'LAIN-LAIN'),
('Z027', 'MCU TUJUAN TERTENTU', 'Encounter for issue of medical certificate', 'LAIN-LAIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `kd_dokter` varchar(30) NOT NULL,
  `nm_dokter` varchar(300) NOT NULL,
  `tmp_lhr` varchar(300) NOT NULL,
  `tlp` varchar(14) NOT NULL,
  `alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`kd_dokter`, `nm_dokter`, `tmp_lhr`, `tlp`, `alamat`) VALUES
('D001', 'Habibi', 'Bandung', '085721101020', 'Ciputat'),
('D002', 'Rizki', 'Bandung', '089699441007', 'Cianjur'),
('D003', 'Hendri J Dunant', 'Cirebon', '0812121212', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `kd_obat` varchar(30) NOT NULL,
  `nm_obat` varchar(300) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `isi` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`kd_obat`, `nm_obat`, `satuan`, `isi`, `stok`, `harga_beli`, `harga_jual`, `profit`) VALUES
('OBT00001', 'PARACETAMOL', 'PCS', 1, 20, 3000, 5000, 2000),
('OBT00002', 'BALJITOT 50ML', 'BOTOL', 1, 15, 30000, 60000, 30000),
('OBT00003', 'FRESH CARE ROOL ON STRONG', 'PCS', 1, 20, 25000, 35000, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `no_pasien` varchar(20) NOT NULL,
  `nm_pasien` varchar(300) NOT NULL,
  `j_kel` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `usia` varchar(20) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  `tgldaftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`no_pasien`, `nm_pasien`, `j_kel`, `pekerjaan`, `agama`, `alamat`, `tgl_lhr`, `usia`, `no_tlp`, `foto`, `status`, `tgldaftar`) VALUES
('PSN00001', 'Nizam', 'L', 'Teller Bank', 'Islam', 'Kebarepan', '1998-02-06', '22', '081267678909', 'pasien.png', 'A', '2021-02-04'),
('PSN00002', 'Andri Partanto', 'L', 'Guru SMA', 'Islam', 'Jakarta', '1990-02-04', '30', '5656565656', 'pasien.png', 'A', '2021-02-04'),
('PSN00003', 'Heri Herdianto', 'L', 'Sales', 'Islam', 'Cirbebon', '1980-02-26', '40', '0815252525', 'pasien.png', 'A', '2021-02-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian_detail`
--

CREATE TABLE `tb_pembelian_detail` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `kd_obat` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembelian_detail`
--

INSERT INTO `tb_pembelian_detail` (`id`, `tgl`, `kd_obat`, `jumlah`) VALUES
(2, '2021-02-09', 'OBT00002', 5);

--
-- Trigger `tb_pembelian_detail`
--
DELIMITER $$
CREATE TRIGGER `hapusobat` AFTER DELETE ON `tb_pembelian_detail` FOR EACH ROW BEGIN
UPDATE tb_obat
set stok=stok-OLD.jumlah
where kd_obat=OLD.kd_obat;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambahobat` AFTER INSERT ON `tb_pembelian_detail` FOR EACH ROW BEGIN
update tb_obat
set stok=stok+NEW.jumlah
where kd_obat=NEW.kd_obat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `username`, `nama`, `password`, `level`, `foto`) VALUES
(1, 'admin', 'abc', 'admin', 'admin', 'user.jpg'),
(3, 'petugas', 'Petugas', 'petugas', 'petugas', 'thumbs-up.png'),
(4, 'dokter', 'Dokter', 'dokter', 'dokter', 'user.png'),
(5, 'apoteker', 'Apoteker', 'apoteker', 'apoteker', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekam_medis`
--

CREATE TABLE `tb_rekam_medis` (
  `id` int(11) NOT NULL,
  `no_rm` varchar(30) NOT NULL,
  `no_pasien` varchar(20) NOT NULL,
  `diagnosa` varchar(300) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `ket` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `statusobat` varchar(30) NOT NULL,
  `kd_dokter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rekam_medis`
--

INSERT INTO `tb_rekam_medis` (`id`, `no_rm`, `no_pasien`, `diagnosa`, `tgl_pemeriksaan`, `ket`, `status`, `statusobat`, `kd_dokter`) VALUES
(20, 'ID-0585470212', 'PSN00003', 'A186', '2021-02-06', 'OMSK TBC', 'Selesai', 'Selesai', 'D001'),
(21, 'ID-4832472874', 'PSN00002', 'A182', '2021-02-06', 'TBC LARING/KELENJAR LEHER', 'Selesai', 'Selesai', 'D001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekam_medis_detail2`
--

CREATE TABLE `tb_rekam_medis_detail2` (
  `id` int(11) NOT NULL,
  `no_rm` varchar(30) NOT NULL,
  `kd_obat` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `dosis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekam_medis_detail2`
--

INSERT INTO `tb_rekam_medis_detail2` (`id`, `no_rm`, `kd_obat`, `jumlah`, `dosis`) VALUES
(60, 'ID-8873846998', 'OBT00002', 1, '3'),
(62, 'ID-0585470212', 'OBT00002', 1, '2'),
(63, 'ID-4832472874', 'OBT00002', 2, '3'),
(64, 'ID-9119078138', 'OBT00002', 1, '3'),
(65, 'ID-9119078138', 'OBT00003', 1, '3');

--
-- Trigger `tb_rekam_medis_detail2`
--
DELIMITER $$
CREATE TRIGGER `obat` AFTER INSERT ON `tb_rekam_medis_detail2` FOR EACH ROW BEGIN
update tb_obat
set stok=stok-NEW.jumlah
where kd_obat=NEW.kd_obat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekam_medis_detail3`
--

CREATE TABLE `tb_rekam_medis_detail3` (
  `id` int(11) NOT NULL,
  `no_rm` varchar(30) NOT NULL,
  `bb` varchar(20) NOT NULL,
  `tb` varchar(20) NOT NULL,
  `lp` varchar(20) NOT NULL,
  `suhu` varchar(20) NOT NULL,
  `td` varchar(20) NOT NULL,
  `ao` varchar(5) NOT NULL,
  `kol` varchar(20) NOT NULL,
  `au` varchar(20) NOT NULL,
  `glu` varchar(20) NOT NULL,
  `hb` varchar(20) NOT NULL,
  `keluhan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekam_medis_detail3`
--

INSERT INTO `tb_rekam_medis_detail3` (`id`, `no_rm`, `bb`, `tb`, `lp`, `suhu`, `td`, `ao`, `kol`, `au`, `glu`, `hb`, `keluhan`) VALUES
(27, 'ID-8873846998', '70', '170', '38', '35', '130', 'T', '100', '100', '100', '200', 'Batuk,Flu'),
(28, 'ID-0585470212', '75', '165', '35', '35', '120', 'T', '100', '100', '100', '100', 'Flu,Demam,Muntah'),
(29, 'ID-4832472874', '70', '170', '38', '35', '130/60', 'T', '100', '100', '100', '200', 'Batuk,Flu,Demam'),
(30, 'ID-9119078138', '70', '170', '38', '35', '130/60', 'T', '90', '90', '90', '100', 'Batuk,Flu,Demam');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_beliobat`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_beliobat` (
`id` int(11)
,`kd_obat` varchar(10)
,`nm_obat` varchar(300)
,`satuan` varchar(20)
,`isi` int(11)
,`jumlah` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_rm`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_rm` (
`no_rm` varchar(30)
,`tgl_pemeriksaan` date
,`no_pasien` varchar(20)
,`nm_pasien` varchar(300)
,`tgl_lhr` date
,`pekerjaan` varchar(100)
,`agama` varchar(100)
,`alamat` varchar(300)
,`tb` varchar(20)
,`bb` varchar(20)
,`lp` varchar(20)
,`suhu` varchar(20)
,`td` varchar(20)
,`ao` varchar(5)
,`kol` varchar(20)
,`au` varchar(20)
,`glu` varchar(20)
,`hb` varchar(20)
,`keluhan` varchar(100)
,`diagnosa` varchar(300)
,`ket` text
,`nm_dokter` varchar(300)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_beliobat`
--
DROP TABLE IF EXISTS `view_beliobat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_beliobat`  AS SELECT `tb_pembelian_detail`.`id` AS `id`, `tb_pembelian_detail`.`kd_obat` AS `kd_obat`, `tb_obat`.`nm_obat` AS `nm_obat`, `tb_obat`.`satuan` AS `satuan`, `tb_obat`.`isi` AS `isi`, `tb_pembelian_detail`.`jumlah` AS `jumlah` FROM (`tb_pembelian_detail` join `tb_obat`) WHERE `tb_pembelian_detail`.`kd_obat` = `tb_obat`.`kd_obat` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_rm`
--
DROP TABLE IF EXISTS `view_rm`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rm`  AS SELECT `tb_rekam_medis`.`no_rm` AS `no_rm`, `tb_rekam_medis`.`tgl_pemeriksaan` AS `tgl_pemeriksaan`, `tb_pasien`.`no_pasien` AS `no_pasien`, `tb_pasien`.`nm_pasien` AS `nm_pasien`, `tb_pasien`.`tgl_lhr` AS `tgl_lhr`, `tb_pasien`.`pekerjaan` AS `pekerjaan`, `tb_pasien`.`agama` AS `agama`, `tb_pasien`.`alamat` AS `alamat`, `tb_rekam_medis_detail3`.`tb` AS `tb`, `tb_rekam_medis_detail3`.`bb` AS `bb`, `tb_rekam_medis_detail3`.`lp` AS `lp`, `tb_rekam_medis_detail3`.`suhu` AS `suhu`, `tb_rekam_medis_detail3`.`td` AS `td`, `tb_rekam_medis_detail3`.`ao` AS `ao`, `tb_rekam_medis_detail3`.`kol` AS `kol`, `tb_rekam_medis_detail3`.`au` AS `au`, `tb_rekam_medis_detail3`.`glu` AS `glu`, `tb_rekam_medis_detail3`.`hb` AS `hb`, `tb_rekam_medis_detail3`.`keluhan` AS `keluhan`, `tb_rekam_medis`.`diagnosa` AS `diagnosa`, `tb_rekam_medis`.`ket` AS `ket`, `tb_dokter`.`nm_dokter` AS `nm_dokter` FROM (((((`tb_pasien` join `tb_obat`) join `tb_rekam_medis`) join `tb_rekam_medis_detail2`) join `tb_rekam_medis_detail3`) join `tb_dokter`) WHERE `tb_pasien`.`no_pasien` = `tb_rekam_medis`.`no_pasien` AND `tb_rekam_medis_detail2`.`no_rm` = `tb_rekam_medis`.`no_rm` AND `tb_rekam_medis_detail3`.`no_rm` = `tb_rekam_medis`.`no_rm` AND `tb_dokter`.`kd_dokter` = `tb_rekam_medis`.`kd_dokter` GROUP BY `tb_rekam_medis`.`no_rm` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indeks untuk tabel `tb_pembelian_detail`
--
ALTER TABLE `tb_pembelian_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian_detail`
--
ALTER TABLE `tb_pembelian_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
