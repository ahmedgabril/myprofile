-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 12:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blank`
--
CREATE DATABASE IF NOT EXISTS `blank` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blank`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_21_211808_create_permission_tables', 1),
(5, '2021_11_28_221453_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'الصفحه الرئيسه', 'web', '2021-12-05 13:09:50', '2021-12-05 13:09:50'),
(2, 'المستخدمين والصلاحيات', 'web', '2021-12-05 13:09:50', '2021-12-05 13:09:50'),
(3, 'اداره المستخدمين', 'web', '2021-12-05 13:09:50', '2021-12-05 13:09:50'),
(4, 'الوظائف', 'web', '2021-12-05 13:09:50', '2021-12-05 13:09:50'),
(5, 'الاعدادت', 'web', '2021-12-05 13:09:50', '2021-12-05 13:09:50'),
(6, 'الاعدادت العامه', 'web', '2021-12-05 13:09:50', '2021-12-05 13:09:50'),
(7, 'اعدادت المستخدمين', 'web', '2021-12-05 13:09:50', '2021-12-05 13:09:50'),
(8, 'الاحصائات', 'web', '2021-12-05 13:09:50', '2021-12-05 13:09:50'),
(9, 'المساعده', 'web', '2021-12-05 13:09:50', '2021-12-05 13:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'owner', 'web', '2021-12-05 13:09:50', '2021-12-05 13:09:50'),
(2, 'admin', 'web', '2021-12-05 13:09:51', '2021-12-05 13:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 1),
(9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'compnyname', 'go dady', NULL, NULL),
(2, 'faks', '25021356', NULL, NULL),
(3, 'manger', 'ahmed gabril', NULL, NULL),
(4, 'phone', '01092586526', NULL, NULL),
(5, 'address', 'كفر الشيخ ', NULL, NULL),
(6, 'phone2', '01000000140', NULL, NULL),
(7, 'email', 'ahmed@gmail.com', NULL, NULL),
(8, 'darkmode', '0', NULL, NULL),
(9, 'sidebar', 'open', NULL, NULL),
(10, 'sitename', 'one click', NULL, NULL),
(11, 'logo', '/dist/img/AdminLTELogo.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rolename` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `darkmode` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rolename`, `status`, `darkmode`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Example Admin User', 'admin@test.com', '2021-12-05 13:09:52', '$2y$10$/frsogR1ZhStrsjsGPs13OJg/Ybk.bF3NiGlFjiRehOEacb3PjzGq', NULL, 1, 0, NULL, '5mQFIC4GoI', '2021-12-05 13:09:52', '2021-12-05 13:09:52'),
(2, 'Ahmed Gabril', 'owner@test.com', '2021-12-05 13:09:52', '$2y$10$YUhEiQPxrV9AHOalgerMi.VdvP.2.WBWx18FrVN.z3tTi2q11Ltx2', NULL, 1, 1, NULL, 'N8CIhycDpH', '2021-12-05 13:09:52', '2021-12-05 19:54:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
--
-- Database: `magdy`
--
CREATE DATABASE IF NOT EXISTS `magdy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `magdy`;
--
-- Database: `myprofile`
--
CREATE DATABASE IF NOT EXISTS `myprofile` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `myprofile`;

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dec` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `title`, `img`, `dec`, `status`, `logo`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Gabril', 'Im a professional web develper\n\n', 'minsiteimage/D8498j6saMqWrS4GeAabEeqWNhduKs6lazWBvQrT.jpg', '<div><strong>Name</strong><br><strong>Title</strong><br>City, State or Country if international<br>Phone | Email<br>LinkedIn URL<br><br><br></div><h1><strong>YOUTH DEVELOPMENT SPECIALIST PROFESSIONAL</strong></h1><div><br>Service-focused and compassionate Youth Development Specialist often sought after to provide individualized assessment and evaluation for at-risk students and their families. Collaborate with primary care and mental health professionals as well as court and school officials to determine appropriate intervention measures. Research, write, and administer grants for extracurricular and outreach programs that support community youth needs and goals.<br><br><br><strong>CORE COMPETENCIES</strong></div><ul><li><ul><li>Program Administrator</li><li>Assessment &amp; Evaluation</li><li>Crisis Intervention &amp; Response</li><li>Treatment Plans</li><li>Continuity of Care</li><li>Social Work</li><li>Case Management</li><li>Intake &amp; Placement</li><li>Mentorship/ Collaboration</li></ul></li><li><br><br><strong>PROFESSIONAL EXPERIENCE</strong><br><br><strong>Youth Development Specialist</strong><br><em>Company Name | City, State | mm/yyyy to Present</em><br><strong>Responsibilities</strong><br><em>Provided assessment, crisis intervention &amp; counseling to adolescents and families at risk; served as liaison interfacing with schools &amp; courts. Consulted with interdisciplinary team to achieve optimal educational and mental health plans for youth and families</em><ul><li>Hired and supervised part-time counseling staff and student interns.</li><li>Assisted in grant writing for after school program; provided administrative support for this program.</li><li>Developed and coordinated Peer Outreach Leadership Program for high school students; mentored youth and provided training in life skills.</li></ul></li></ul><div><br></div><ul><li><h1><strong>Youth Advocate</strong></h1></li><li><em>Company Name | City, State | mm/yyyy to mm/yyyy</em><br><strong>Responsibilities</strong><br><em>Provided mentoring support to youth and participated in development of individualized service plan for youth. Educated youth to acquired greater communication, system navigation and self-regulation skills. Developed and maintained positive relationships with youth and families receiving services. Identified needs of youth and families and took appropriate actions to rendered appropriate assistance.</em><ul><li>Thoroughly documented work done on behalf of youth clients.</li><li>Maintained comprehensive documentation.</li><li>Served on the Sacramento County Youth Advocate Committee and executed team projects.</li><li>Advocated for youth clients voice and perspective in development and treatment planning.</li></ul></li></ul><div><br></div><ul><li><h1><strong>Youth Advocate</strong></h1></li><li><em>Company Name | City, State | mm/yyyy to mm/yyyy</em><br><strong>Responsibilities</strong><br><em>Provided direct client care, parenting and youth skills training for at risk youth and families. Performed one on one Case management for the following areas, housing, employment, school success, and crisis support. Made decisions, solved problems, and evaluated for the best outcome success for the youth and family.</em><ul><li>Provided DV support and violence prevention including gang activities in the community and schools through skills building.</li><li>Established and maintain interpersonal relationship with outside agencies through knowledge of community resources, enabling appropriate refers specific clients\' needs.</li><li>Provided violence prevention skills training groups in school and community settings.</li></ul></li><li><br><br></li><li><h1><strong>EDUCATION</strong></h1></li><li>&nbsp;<br>Complete School Name, City, St/Country: List Graduation Years If Within the Last Ten Years Complete Degree Name (Candidate) – Major (GPA: List if over 3.3)<ul><li>Relevant Coursework: List coursework taken (even include those you are planning on taking)</li><li>Awards/Honors: List any awards, honors or big achievements</li><li>Clubs/Activities: List clubs and activities in which you participated</li><li>Relevant Projects: List 2-3 projects you have worked on</li></ul></li></ul><div><br></div><ul><li><h1><strong>Everything you need to write your youth development specialist resume</strong></h1></li><li><br>&nbsp;Now that you’ve seen an example of a job winning Youth Development Specialist resume, here are some tips to help you write your own. You should always begin with a summary section. Remember to use basic formatting with clear section headings and a traditional layout. Finally, be sure to include top skills throughout your resume. We’ve included several examples common for Youth Development Specialist below.<br><br>Let’s start with your resume summary section.<br><br></li><li><h1><strong>1. Summary</strong></h1></li><li><br>&nbsp;The resume summary replaces the out-of-date resume objective. A summary outlines the most impressive parts of your resume for easy recall by your potential employer, while also serving to fill in personal qualities that may not appear elsewhere on the page. Remember that summaries are short and consist of pithy sentence fragments! You can check out the Youth Development Specialist resume example for more information!<br><br><strong>EXPERT TIP</strong><br>Always start with your most recent positions at the top of your resume. This is called <a href=\"https://www.zipjob.com/blog/write-chronological-resume-example-included-zipjob/\">reverse-chronological format</a>, and keeps your most relevant information easy for hiring managers to review.<br><br></li><li><h1><strong>2. Formatting</strong></h1></li><li><br>Our experts recommend you start your resume with a resume summary, like the one above. Other common sections are Work Experience, Education, and either Skills or Core Competencies. Here are some guides from our blog to help you write these sections:<ul><li><a href=\"https://www.zipjob.com/blog/work-experience-section-resume/\">How To Write Your Resume’s Work Experience Section</a></li><li><a href=\"https://www.zipjob.com/blog/education-section-resume/\">How To Write Your Resume’s Education Section</a></li><li><a href=\"https://www.zipjob.com/blog/skills-to-put-on-resume/\">Good Skills To Put On Your Resume</a></li></ul></li><li><br>Some resumes will include other sections, such as <a href=\"https://www.zipjob.com/blog/volunteer-work-resume-examples/\">Volunteer Experience</a> or <a href=\"https://www.zipjob.com/blog/technical-skills-on-resume/\">Technical Skills</a>. When it comes to what sections you need to include on your resume, you will know best!<br><br>Other sections for you to consider including are foreign language skills, awards and honors, certifications, and speaking engagements. These could all be relevant sections for your resume.</li><li><strong>Jo</strong></li></ul>', 1, 'sitelogo/0qWI62kwCW2jdIF8AkbMsFbnaSJ25voitRz5OYFJ.svg', '', NULL, '2022-01-18 18:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `catogeries`
--

CREATE TABLE `catogeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catogeries`
--

INSERT INTO `catogeries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'webdesion', '2022-01-13 17:54:20', NULL),
(2, 'webdevoper', '2022-01-13 18:54:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hours_Of_Support` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projects` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clients` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hard Workers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dec` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gabs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `dec`, `img`, `name`, `gabs`, `feedback`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'feedback/ahmed gabril/testimonials-3.jpg', 'ahmed gabril', 'devepoer', '<div dir=\"rtl\">استاذ احمد استاذ راقى وسعدت بالعمل معه&nbsp; وما وعدنى به لقته go pro</div>', 1, '2022-01-14 21:35:54', '2022-01-14 21:51:24'),
(2, NULL, 'feedback/mohamed ali/testimonials-5.jpg', 'mohamed ali', 'صاحب شركه', '<div dir=\"rtl\">انسان محترم وصادق فى التعامل ومواعيده مضبوطه وشغل عالى الجوده&nbsp; بسعر محترم جدا شكرا لك ياهندسه</div>', 1, '2022-01-14 21:56:22', '2022-01-14 21:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_21_211808_create_permission_tables', 1),
(5, '2021_11_28_221453_create_settings_table', 1),
(6, '2021_12_06_215602_create_abouts_table', 1),
(7, '2021_12_06_221318_create_skills_table', 1),
(8, '2021_12_06_221638_create_facts_table', 1),
(9, '2021_12_06_222145_create_feedback_table', 1),
(10, '2021_12_06_222644_create_services_table', 1),
(11, '2021_12_06_223116_create_catogeries_table', 1),
(12, '2021_12_06_223229_create_portfolios_table', 1),
(13, '2021_12_06_224433_create_sochails_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(5, 'App\\Models\\User', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(117, 'من انا', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(118, 'بيانتى الشخصيه ', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(119, 'صوره الموقع الرئيسه', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(120, 'روابط التواصل الاجتماعى', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(121, 'لوجو الموقع الرئيسى', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(122, 'رفع ملف السره الذاتيه', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(123, 'المهارات', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(124, 'اضافه مهاره', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(125, 'مهاره كنترول', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(126, 'تعديل مهاره', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(127, 'حذف مهاره', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(128, 'الخدمات', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(129, 'اضافه خدمه', 'web', '2022-01-18 02:34:59', '2022-01-18 02:34:59'),
(130, 'خدمه كنترول', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(131, 'تعديل خدمه', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(132, 'حذف خدمه', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(133, 'معرض الاعمال', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(134, 'اداره الاقسام', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(135, 'قسم كنترول', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(136, 'تعديل قسم', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(137, 'حذف قسم', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(138, 'اداره المشاريع', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(139, 'مشروع كنترول', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(140, 'تعديل مشروع', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(141, 'حذف مشروع', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(142, 'اداره اراء العملاء', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(143, 'راى كنترول', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(144, 'تعديل راى', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(145, 'حذف راى', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(146, 'المستخدمين والصلاحيات', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(147, 'اداره المستخدمين', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(148, 'مستخدم كنترول', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(149, 'تعديل مستخدم', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(150, 'حذف مستخدم', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(151, 'الوظائف', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(152, 'وظيفه كنترول', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(153, 'تعديل وظيفه', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(154, 'حذف وظيفه', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(155, 'الاعدادت', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00'),
(156, 'بيانات الموقع', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clint_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dec` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `name`, `clint_name`, `date`, `icon`, `dec`, `img`, `project_url`, `video_url`, `status`, `cat_id`, `created_at`, `updated_at`) VALUES
(7, 'موقع شخصى لعرض الاعمال والمهارات والخدمات والسيره الذاتيه وسابقه الاعمال موقع شخصى شخصى موقع شخصى\n', 'موقع شخصى لعرض الاعمال والمهارات والخدمات', 'ahmed gabril', '2021-10-08', 'portfoilo/minimage/موقع شخصى لعرض الاعمال والمهارات والخدمات/Capture8.PNG', '<div dir=\"rtl\"><strong>موقع شخصى لعرض الاعمال والمهارات والخدمات والسيره الذاتيه وسابقه الاعمال</strong></div><ul><li><br></li></ul><h1><strong>&nbsp;</strong></h1>', '[\"portfoilo\\/\\u0645\\u0648\\u0642\\u0639 \\u0634\\u062e\\u0635\\u0649 \\u0644\\u0639\\u0631\\u0636 \\u0627\\u0644\\u0627\\u0639\\u0645\\u0627\\u0644 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0627\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a\\/Capture.PNG\",\"portfoilo\\/\\u0645\\u0648\\u0642\\u0639 \\u0634\\u062e\\u0635\\u0649 \\u0644\\u0639\\u0631\\u0636 \\u0627\\u0644\\u0627\\u0639\\u0645\\u0627\\u0644 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0627\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a\\/Capture1.PNG\",\"portfoilo\\/\\u0645\\u0648\\u0642\\u0639 \\u0634\\u062e\\u0635\\u0649 \\u0644\\u0639\\u0631\\u0636 \\u0627\\u0644\\u0627\\u0639\\u0645\\u0627\\u0644 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0627\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a\\/Capture2.PNG\",\"portfoilo\\/\\u0645\\u0648\\u0642\\u0639 \\u0634\\u062e\\u0635\\u0649 \\u0644\\u0639\\u0631\\u0636 \\u0627\\u0644\\u0627\\u0639\\u0645\\u0627\\u0644 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0627\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a\\/Capture3.PNG\",\"portfoilo\\/\\u0645\\u0648\\u0642\\u0639 \\u0634\\u062e\\u0635\\u0649 \\u0644\\u0639\\u0631\\u0636 \\u0627\\u0644\\u0627\\u0639\\u0645\\u0627\\u0644 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0627\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a\\/Capture5.PNG\",\"portfoilo\\/\\u0645\\u0648\\u0642\\u0639 \\u0634\\u062e\\u0635\\u0649 \\u0644\\u0639\\u0631\\u0636 \\u0627\\u0644\\u0627\\u0639\\u0645\\u0627\\u0644 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0627\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a\\/Capture8.PNG\",\"portfoilo\\/\\u0645\\u0648\\u0642\\u0639 \\u0634\\u062e\\u0635\\u0649 \\u0644\\u0639\\u0631\\u0636 \\u0627\\u0644\\u0627\\u0639\\u0645\\u0627\\u0644 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0627\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a\\/Capture10.PNG\",\"portfoilo\\/\\u0645\\u0648\\u0642\\u0639 \\u0634\\u062e\\u0635\\u0649 \\u0644\\u0639\\u0631\\u0636 \\u0627\\u0644\\u0627\\u0639\\u0645\\u0627\\u0644 \\u0648\\u0627\\u0644\\u0645\\u0647\\u0627\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a\\/Capture11.PNG\"]', '', '', 1, 2, '2022-01-13 17:54:20', '2022-01-16 19:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(5, 'owner', 'web', '2022-01-18 02:35:00', '2022-01-18 02:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(117, 5),
(118, 5),
(119, 5),
(120, 5),
(121, 5),
(122, 5),
(123, 5),
(124, 5),
(125, 5),
(126, 5),
(127, 5),
(128, 5),
(129, 5),
(130, 5),
(131, 5),
(132, 5),
(133, 5),
(134, 5),
(135, 5),
(136, 5),
(137, 5),
(138, 5),
(139, 5),
(140, 5),
(141, 5),
(142, 5),
(143, 5),
(144, 5),
(145, 5),
(146, 5),
(147, 5),
(148, 5),
(149, 5),
(150, 5),
(151, 5),
(152, 5),
(153, 5),
(154, 5),
(155, 5),
(156, 5);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dec` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `name`, `icon`, `dec`, `img`, `price`, `url`, `status`, `created_at`, `updated_at`) VALUES
(5, 'امتلك موقعك الشخصى لعرض اعمالك بلوحه تحم ديناميك اعلى جوده ممكنه وبسعر مناسب ', 'معرض اعمال شخصى بلوحه تحكم دينامك', 'service_image/man_services_imageمعرض اعمال شخصى بلوحه تحكم دينامك/Capture8.PNG', '<div dir=\"rtl\">الحقيقة هي إنك إذا لم تقوم بإدارة صورتك الإلكترونية فسوف تقوم هي بالسيطرة عليك. هل تتذكر الصور المحرجة التي قمت بوضعها على الفيس بوك في ليلة رأس السنة الماضية؟ لقد رأتها عائلتك في اليوم التالي. و التغريدة الغير ملائمة التي كتبتها؟ كم تتمنى أن يعود بك الوقت لكي لا تكتبها. لكن لبعض الناس، هذه الأشياء قد تكون جدية عندما يبدءون في . حينها يدركوا أن عليهم يتحكموا في ما سيراه أصحاب العمل المحتملين عنهم إلكترونياً. و لا يوجد طريقة أفضل من ذلك إلا ببدأ موقع شخصي.<br><br></div><div dir=\"rtl\">لكن لا يجب أن تكون صاحب شركة عالمية لتستفيد من السلطات<a href=\"https://ar-ae.godaddy.com/blog/%d8%b3%d8%aa-%d8%a3%d9%81%d9%83%d8%a7%d8%b1-%d8%b0%d9%83%d9%8a%d8%a9-%d9%84%d8%aa%d8%b7%d9%88%d9%8a%d8%b1-%d8%a7%d9%84%d8%aa%d8%b3%d9%88%d9%8a%d9%82-%d9%88-%d8%a7%d9%84%d8%aa%d8%b1%d9%88%d9%8a%d8%ac/\"> الترويجية للشبكة الإلكترونية</a>. فأي شخص يريد أن يترك إنطباعاً عبر الإنترنت – إذا كان يريد الحصول على عمل جديد، للترويج عن عمله الخاص أو فقط للتواصل مع أشخاص لديهم نفس طريقة التفكير- يمكنك فعل هذا عن طريق موقع شخصي.<br><br></div><div><br></div><div dir=\"rtl\"><strong>بالإضافة إلى لينكد إن<br></strong><br></div><div dir=\"rtl\">فلنقل أن صفحتك على موقع لينكد إن مدهشة. فهل حقاً تحتاج لموقع شخصي؟ الإجابة هي “نعم” يقول ويليم أورانجا، مدير التعيين التقني و التوظيف المؤسسي بشركة جودادي. فهو يشرح:<br><br></div><blockquote dir=\"rtl\">كلما كان لديك عدد أكبر من الأعمال الأصلية التي تريد أن تتباهى بها، كلما زادت أهمية أن يكون لك موقع شخصي. إذا كان شخص يدعي أنه خبير بشئ معين فيجب أن نرى دليل على ذلك.<br><br></blockquote><div dir=\"rtl\">أجل، يمكنك أن تقوم بإرفاق ملفات، صور، فيديوهات و الشرائح الضوئية لـ صفحة اللينكد إن الخاص بك، لكن هناك عدد معين من الملفات التي يمكنك أن تحملها. كما لا يمكنك أن تضيف شهادات و تعليقات العملاء – شئ ضروري إذا كنت متعهد مستقل تبحث عن وظيفة. “يمكنك اعتبار لينكد إن كبطاقة عمل تشير إلى موقعك” يقول ويليم، “خصوصاً إذا كنت تعمل لحسابك الخاص”.<br><br></div><div dir=\"rtl\"><strong>ما هي فائدة إنشاء موقع شخصي ؟<br></strong><br></div><div dir=\"rtl\">وفقاً لموقع <a href=\"https://www.forbes.com/sites/nextavenue/2013/09/30/why-you-need-your-own-website-for-a-job-search/#4d3c2f734e05\">فوربس</a>، إن أكثر من نصف مديري التوظيف يهتمون بالمواقع الشخصية أكثر من أي أداة أخرى للتعريف عن النفس. إن موقع شخصي مصمم خصيصاً لك سيعطيك الحرية الإختيار والتحكم في ما يوجد فيه، لذا بالطبع متوقع أن تضع أفضل أعمالك وأحسن رؤية لشخصيتك، مهاراتك و خبرتك. المدهش هو أن أقل من عشرة بالمئة من المتقدمين للوظائف يوجد لديهم موقع شخصي.<br><br></div><div dir=\"rtl\"><strong>وجود موقع شخصي لك:<br></strong><br></div><ul dir=\"rtl\"><li>يعطيك حرية كاملة لتوضح من أنت، في كل شئ من اختيارك للألوان و الصور و تنسيق و ترتيب موقعك الشخصي.</li><li>يوضح مدى جديتك في حياتك المهنية و أنك مستعد لاستثمار وقت و جهد لترتقي.</li><li>يعمل الموقع الشخصي كأرشيف لتاريخ أعمالك، دراساتك، إنجازاتك و هواياتك.</li><li>يمكنك أن تضيف شهادات العملاء، و أيضاً الكثير من الصور، ملفات لمشاريع و فيديوهات</li></ul><div dir=\"rtl\">هل تدير مشروع و تبحث عن عمل أخر في نفس الوقت؟ إن وجود موقع شخصي تستخدمه للبحث عن عمل أمر يبدو منطقياً. بهذه الطريقة زبائنك الحاليين لن يكونوا مشوشين عند رؤية سيرتك الذاتية و مسئولين التوظيف لن يقدم لهم عربة التسوق.<br><br></div><div dir=\"rtl\"><strong>كل شئ يبدأ بإسم نطاق<br></strong><br></div><div dir=\"rtl\">كخبيرة بكل الأمور التي تخص اسم النطاق، فأرى “إن خلف كل موقع إلكتروني، هناك <a href=\"https://ar-ae.godaddy.com/blog/%D8%A7%D8%AE%D8%AA%D9%8A%D8%A7%D8%B1-%D8%A7%D8%B3%D9%85-%D8%A7%D9%84%D9%86%D8%B7%D8%A7%D9%82-%D9%85%D9%88%D9%82%D8%B9%D9%83/\">اسم نطاق</a>“. فكما تعطي أصدقائك عنوانك ليجدوا منزلك، فنحن نعطيهم اسم النطاق الخاص بنا لنساعدهم على العثور على مواقعنا الإلكترونية. إنه ما يكتبوه في المتصفح الخاص بهم ليجدونا عبر الإنترنت. فقط في هذه الحالة، يكون الوكيل العقاري افتراضي.<br><br></div><blockquote dir=\"rtl\">.لإنشاء موقع شخصي، عليك تسجيل نطاق به اسمك<br><br></blockquote><div dir=\"rtl\">مع الأخذ في الإعتبار أن مسئولين التوظيف عادة ما يستخدمون جوجل أو بينج للبحث عن المتقدمين للعمل، فأفضل ما يمكن أن تفعله هو أن تسجل نطاق بإسمك. بهذه الطريقة، عندما يبحث عنك أي شخص إلكترونياً فسيظهر له موقعك الشخصي في أول صفحة من نتائج البحث.<br><br></div><div dir=\"rtl\">إذا كنت لا تستطيع الحصول على اسمك.كوم لأن شخص أخر قد اشتراه بالفعل؟ لا تقلق. فالفضل يعود إلى ظهور مئات من <a href=\"https://ae.godaddy.com/ar/domains/domain-name-search?isc=cardigan\">أسماء النطاقات</a> ذات مستوى رفيع، فيوجد عالم جديد من الخيارات. فإذا كنت طبيب بطري فيمكنك اختيار اسمك.vet. و إذا كنت محامي فيمكنك اختيار اسمك.lawyer . و هناك المزيد- فهناك بعض <a href=\"https://ae.godaddy.com/ar/domains/gtld-domain-names?isc=cardigan\">امتدادات للنطاقات</a> التي تزداد شهرتها مثل .photography, .nyc, .guru, .mba, .dentist .engineer. و لإنهم كلهم جديدون، و هناك الكثير من الأسماء لتختار منها.<br><br></div><div dir=\"rtl\"><strong>ثم يبدأ المرح<br></strong><br></div><div dir=\"rtl\">فبمجرد ما ان وجدت اسم النطاق الخاص بك، الخطوة التالية هي أن تبدأ. هناك الكثير من أدوات بناء المواقع الموجودة في السوق، و منها أداة إنشاء المواقع من جودادي <a href=\"https://ae.godaddy.com/websites/website-builder\">Website Builder</a> و<a href=\"https://ae.godaddy.com/ar/hosting/wordpress-hosting?isc=cardigan\">استضافة وورد بريس المُدارة</a>. بالطبع يمكنك تعيين شخص متخصص لبناء موقعك إذا لم يتوفر لديك الوقت أو الموهبه.<br><br></div><div dir=\"rtl\">إن العالم الآن يحكمه هواتف المحمول، لذا تأكد أن موقعك يمكن عرضه على الشاشات المختلفه مثل الهواتف الذكية و الآي باد. لا شئ يدفع الزوار بعيداً أسرع من أن يكون من الصعب رؤية أو استخدام الموقع على الجهاز الذي يستخدمونه حالياً.<br><br></div><div dir=\"rtl\"><strong>نصائح و خبايا للموقع الشخصي<br></strong><br></div><div dir=\"rtl\">إليك بعض النصائح لتحصل على النتائج المطلوبة من موقع شخصي :<br><br></div><ul dir=\"rtl\"><li>يشمل مقدمة قصيرة، سيرتك الذاتية، تاريخ عملك، تعريف بالمشاريع التي عملت بها، شهادات من عملاؤك و قائمة بمنشوراتك، جوائز أو براءات اختراع. يمكنك قراءة هذه المقالة الرائعة من <a href=\"https://www.businessinsider.com/job-seekers-need-personal-website-2015-1\">بيزنس أنسايدر</a> للمزيد من الأفكار.</li><li>حاول أن تكون حيادياً- يمكنك إضافة آرائك المهنية لكن بدون التطرق للأمور الإنقسامية مثل السياسة و الدين</li><li>من السهل أن تضيع وسط التفاصيل، لكن حاول أن لا تنغمر في التفاصيل. عندما تنتهي من موقعك، خذ خطوة للوراء و انظر للصورة كاملة بنظرة موضوعية. إسأل الآخرون عن آرائهم.</li><li>تأكد من أن معلوماتك الشخصية – رقم هاتفك، حساباتك على مواقع التواصل الإجتماعي، بريدك الإلكتروني- موجودين في كل صفحة في موقعك.</li></ul><div dir=\"rtl\">و بمجرد ما أن تطلق موقعك، عليك أن تستعرضه! أضف موقعك الإلكتروني لبطاقة عملك، سيرتك الذاتية، توقيع بريدك الإلكتروني و حسابك على لينكد إن. يجب تحديث موقعك بإستمرار، حتى إذا حصلت على وظيفة أحلامك. فأنت لا تعلم متى سيبحث مدير التوظيف عن شخص مثلك لوظيفة أفضل.<br><br></div><div dir=\"rtl\"><strong>إن بناء المواقع قد يصبح كالإدمان<br></strong><br></div><div dir=\"rtl\">هل تتذكر هذه البذور التي زرعتها بالمدرسة؟ في هذا الوقت كنت مجبراً على زراعتها كواجب مدرسي، لكن بمجرد ما أن بدأت، أصبحت مهووساً بها. فهذه السيقان والأوراق الصغيرة كانت كعالم صغير و أنت من قمت بإنشاءه.<br><br></div><div dir=\"rtl\">إن إنشاء موقع شخصي تماماً كهذا. قد يحتاج منك بعض الوقت للتعلم جميع تفاصيل و خبايا بناء المواقع. لكن بمجرد ما أن تبدأ لن تستطيع التوقف. و ستشكر نفسك حينما تبدأ بمقابلات العمل. لذا، إبدأ فى البحث عن عمل &nbsp;</div>', '[\"service_image\\/\\u0645\\u0639\\u0631\\u0636 \\u0627\\u0639\\u0645\\u0627\\u0644 \\u0634\\u062e\\u0635\\u0649 \\u0628\\u0644\\u0648\\u062d\\u0647 \\u062a\\u062d\\u0643\\u0645 \\u062f\\u064a\\u0646\\u0627\\u0645\\u0643\\/Capture.PNG\",\"service_image\\/\\u0645\\u0639\\u0631\\u0636 \\u0627\\u0639\\u0645\\u0627\\u0644 \\u0634\\u062e\\u0635\\u0649 \\u0628\\u0644\\u0648\\u062d\\u0647 \\u062a\\u062d\\u0643\\u0645 \\u062f\\u064a\\u0646\\u0627\\u0645\\u0643\\/Capture1.PNG\",\"service_image\\/\\u0645\\u0639\\u0631\\u0636 \\u0627\\u0639\\u0645\\u0627\\u0644 \\u0634\\u062e\\u0635\\u0649 \\u0628\\u0644\\u0648\\u062d\\u0647 \\u062a\\u062d\\u0643\\u0645 \\u062f\\u064a\\u0646\\u0627\\u0645\\u0643\\/Capture2.PNG\",\"service_image\\/\\u0645\\u0639\\u0631\\u0636 \\u0627\\u0639\\u0645\\u0627\\u0644 \\u0634\\u062e\\u0635\\u0649 \\u0628\\u0644\\u0648\\u062d\\u0647 \\u062a\\u062d\\u0643\\u0645 \\u062f\\u064a\\u0646\\u0627\\u0645\\u0643\\/Capture3.PNG\",\"service_image\\/\\u0645\\u0639\\u0631\\u0636 \\u0627\\u0639\\u0645\\u0627\\u0644 \\u0634\\u062e\\u0635\\u0649 \\u0628\\u0644\\u0648\\u062d\\u0647 \\u062a\\u062d\\u0643\\u0645 \\u062f\\u064a\\u0646\\u0627\\u0645\\u0643\\/Capture5.PNG\",\"service_image\\/\\u0645\\u0639\\u0631\\u0636 \\u0627\\u0639\\u0645\\u0627\\u0644 \\u0634\\u062e\\u0635\\u0649 \\u0628\\u0644\\u0648\\u062d\\u0647 \\u062a\\u062d\\u0643\\u0645 \\u062f\\u064a\\u0646\\u0627\\u0645\\u0643\\/Capture8.PNG\",\"service_image\\/\\u0645\\u0639\\u0631\\u0636 \\u0627\\u0639\\u0645\\u0627\\u0644 \\u0634\\u062e\\u0635\\u0649 \\u0628\\u0644\\u0648\\u062d\\u0647 \\u062a\\u062d\\u0643\\u0645 \\u062f\\u064a\\u0646\\u0627\\u0645\\u0643\\/Capture10.PNG\",\"service_image\\/\\u0645\\u0639\\u0631\\u0636 \\u0627\\u0639\\u0645\\u0627\\u0644 \\u0634\\u062e\\u0635\\u0649 \\u0628\\u0644\\u0648\\u062d\\u0647 \\u062a\\u062d\\u0643\\u0645 \\u062f\\u064a\\u0646\\u0627\\u0645\\u0643\\/Capture11.PNG\"]', '5000 ج.م', '', 1, '2022-01-16 17:55:15', '2022-01-16 18:19:43'),
(6, 'يعد برنامج one click متكامل يعمل على مساعدتك في إدارة كل جوانب أعمالك بواجهة سهلة', 'برنامج  نقاط البيع للانشطه التجاريه الصغيره والمتوسطه', 'service_image/man_services_imageبرنامج  نقاط البيع للانشطه التجاريه الصغيره والمتوسطه/7fbcc129fde411e53921d855e27bcf4e.png', '<div><br></div><ul dir=\"rtl\"><li><strong>المبيعات<br></strong><br>&nbsp;الفاتورة الإلكترونية والضريبية، نقاط البيع، المتجر الإلكتروني، المبيعات المستهدفة والعمولات، الأقساط، العروض،&nbsp;<br><br></li><li><strong>المحاسبة العامة<br></strong><br>&nbsp;المالية، الحسابات العامة، قيود اليومية، دورة الشيكات، دليل الحسابات، الأصول، مراكز التكلفة،حساب الأستاذ، التقارير&nbsp;<br><br></li><li><strong>المخزون</strong><br> المنتجات والخدمات، تتبع المخزون، المشتريات، الموردون، المستودعات، الجرد، قوائم الأسعار، الأذون المخزنية &nbsp;<br><br><br><br></li><li><strong>شؤون الموظفين <br></strong><br><br></li><li>&nbsp;الموظفين، الهيكل التنظيمي، حضور الموظفين، العقود، المرتبات، الطلبات، الإجازات، &nbsp;</li><li><br></li></ul><ul dir=\"rtl\"><li><strong>علاقات العملاء</strong></li></ul><div dir=\"rtl\"><br>&nbsp;إدارة العملاء، متابعة العملاء، المواعيد، النقاط والأرصدة، العضويات والاشتراكات، حضور العملاء</div>', '[\"service_image\\/\\u0628\\u0631\\u0646\\u0627\\u0645\\u062c  \\u0646\\u0642\\u0627\\u0637 \\u0627\\u0644\\u0628\\u064a\\u0639 \\u0644\\u0644\\u0627\\u0646\\u0634\\u0637\\u0647 \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0647 \\u0627\\u0644\\u0635\\u063a\\u064a\\u0631\\u0647 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0648\\u0633\\u0637\\u0647\\/7fbcc129fde411e53921d855e27bcf4e.png\",\"service_image\\/\\u0628\\u0631\\u0646\\u0627\\u0645\\u062c  \\u0646\\u0642\\u0627\\u0637 \\u0627\\u0644\\u0628\\u064a\\u0639 \\u0644\\u0644\\u0627\\u0646\\u0634\\u0637\\u0647 \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0647 \\u0627\\u0644\\u0635\\u063a\\u064a\\u0631\\u0647 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0648\\u0633\\u0637\\u0647\\/768fac04cecacb1d4990132257d3c236.jpg\",\"service_image\\/\\u0628\\u0631\\u0646\\u0627\\u0645\\u062c  \\u0646\\u0642\\u0627\\u0637 \\u0627\\u0644\\u0628\\u064a\\u0639 \\u0644\\u0644\\u0627\\u0646\\u0634\\u0637\\u0647 \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0647 \\u0627\\u0644\\u0635\\u063a\\u064a\\u0631\\u0647 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0648\\u0633\\u0637\\u0647\\/hqdefault.jpg\"]', '15000 ج.م', '', 1, '2022-01-16 18:15:32', '2022-01-16 20:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(12, 'compnyname', 'myprofile', NULL, NULL),
(13, 'whatsup', '01092586526', NULL, '2022-01-18 01:54:44'),
(14, 'whatsupmsg', 'heloo ahme how are you', NULL, '2022-01-18 01:54:44'),
(15, 'manger', 'ahmed gabril', NULL, NULL),
(16, 'phone', '01092586526', NULL, NULL),
(17, 'address', 'كفر الشيخ ', NULL, NULL),
(18, 'phone2', '01000000140', NULL, NULL),
(19, 'email', 'ahmed@gmail.com', NULL, NULL),
(20, 'sidebar', 'open', NULL, NULL),
(21, 'sitename', 'one click', NULL, NULL),
(22, 'logo', '/dist/img/AdminLTELogo.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'php', '65', NULL, '2022-01-16 18:30:14'),
(2, 'laravel', '65', NULL, '2022-01-16 18:30:35'),
(3, 'html', '70', NULL, '2022-01-16 18:30:52'),
(4, 'css', '75', NULL, '2022-01-16 18:31:17'),
(5, 'javascript', '60', '2022-01-16 18:31:45', '2022-01-16 18:31:45'),
(6, 'vue', '55', '2022-01-16 18:32:06', '2022-01-16 18:32:06'),
(7, 'nuxt.js', '55', '2022-01-16 18:32:29', '2022-01-16 18:32:29'),
(8, 'jquery', '65', '2022-01-16 18:33:12', '2022-01-16 18:33:12'),
(9, 'node.js', '50', '2022-01-16 18:33:39', '2022-01-16 18:33:39'),
(10, 'express.js', '50', '2022-01-16 18:34:08', '2022-01-16 18:34:08'),
(11, 'bythone', '50', '2022-01-16 18:34:25', '2022-01-16 18:34:25'),
(12, 'c#', '50', '2022-01-16 18:34:42', '2022-01-16 18:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `sochails`
--

CREATE TABLE `sochails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instgram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setstatus` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sochails`
--

INSERT INTO `sochails` (`id`, `facebook`, `instgram`, `linkedin`, `youtube`, `twitter`, `gmail`, `setstatus`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/adel.gebril.5/about', '', 'https://www.linkedin.com/in/ahmed-gabril-5648901a4/', 'https://www.youtube.com/channel/UCFYaKZmc1BBEdA1Xrwe5PJg', '', 'ajbryl110@gmail.com', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rolename` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `darkmode` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rolename`, `status`, `darkmode`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Ahmed Gabril', 'owner@test.com', NULL, '$2y$10$sVEfLI1agUjbagVEjuduk.2aFN9BVWSi3MZPdPsJJCsRKNFJSJp4G', NULL, 1, 0, NULL, '1zhjBqJNQZZvvwXfrOmYlHLUQfQpkeWjcX2vDQgT0ZKQLuwgLJp56A2cw4dc', '2022-01-18 02:35:01', '2022-01-18 02:35:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catogeries`
--
ALTER TABLE `catogeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sochails`
--
ALTER TABLE `sochails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catogeries`
--
ALTER TABLE `catogeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sochails`
--
ALTER TABLE `sochails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `catogeries` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
--
-- Database: `onclick`
--
CREATE DATABASE IF NOT EXISTS `onclick` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `onclick`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_status` tinyint(4) NOT NULL DEFAULT 0,
  `prenshes_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drowers`
--

CREATE TABLE `drowers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `drowers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drowers_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prensh_id` bigint(20) UNSIGNED NOT NULL,
  `drowers_total_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expenses_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expenses_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expenses_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expenses_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expenses_deployer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genries_id` bigint(20) UNSIGNED DEFAULT NULL,
  `drowers_id` bigint(20) UNSIGNED DEFAULT NULL,
  `prenshes_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genries`
--

CREATE TABLE `genries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gen_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_des` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_date_start` date NOT NULL,
  `gen_date_end` date DEFAULT NULL,
  `gen_status` tinyint(4) NOT NULL DEFAULT 0,
  `prensh_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loges`
--

CREATE TABLE `loges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loges_action_id` bigint(20) NOT NULL,
  `loges_action_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loges_action_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loges_action_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loges`
--

INSERT INTO `loges` (`id`, `loges_action_id`, `loges_action_type`, `loges_action_by`, `loges_action_des`, `created_at`, `updated_at`) VALUES
(1, 1, 'اضافه فرع', NULL, 'تم اضافه فرع من قبل ', '2021-11-28 14:36:04', '2021-11-28 14:36:04'),
(2, 2, 'اضافه فرع', NULL, 'تم اضافه فرع من قبل ', '2021-11-28 14:36:13', '2021-11-28 14:36:13'),
(3, 3, 'اضافه فرع', NULL, 'تم اضافه فرع من قبل ', '2021-11-28 14:36:20', '2021-11-28 14:36:20'),
(4, 4, 'اضافه فرع', NULL, 'تم اضافه فرع من قبل ', '2021-11-28 14:36:27', '2021-11-28 14:36:27'),
(5, 5, 'اضافه فرع', NULL, 'تم اضافه فرع من قبل ', '2021-11-28 14:36:38', '2021-11-28 14:36:38'),
(6, 6, 'اضافه فرع', NULL, 'تم اضافه فرع من قبل ', '2021-11-28 14:36:45', '2021-11-28 14:36:45'),
(7, 7, 'اضافه فرع', NULL, 'تم اضافه فرع من قبل ', '2021-11-28 14:36:52', '2021-11-28 14:36:52'),
(8, 8, 'اضافه فرع', NULL, 'تم اضافه فرع من قبل ', '2021-11-28 14:37:00', '2021-11-28 14:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_10_07_122622_create_prenshes_table', 1),
(5, '2021_10_07_122728_create_customers_table', 1),
(6, '2021_10_07_125440_create_genries_table', 1),
(7, '2021_10_07_131018_create_stores_table', 1),
(8, '2021_10_07_131111_create_drowers_table', 1),
(9, '2021_10_07_131121_create_shipments_table', 1),
(10, '2021_10_07_171219_create_sihptols_table', 1),
(11, '2021_10_07_180515_create_loges_table', 1),
(12, '2021_10_07_183246_create_expenses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prenshes`
--

CREATE TABLE `prenshes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pre_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_authr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_authr_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prenshes`
--

INSERT INTO `prenshes` (`id`, `pre_name`, `address`, `pre_phone`, `pre_authr`, `pre_authr_phone`, `created_at`, `updated_at`) VALUES
(1, 'a', '', '', '', '', '2021-11-28 14:36:04', '2021-11-28 14:36:04'),
(2, 'd', '', '', '', '', '2021-11-28 14:36:13', '2021-11-28 14:36:13'),
(3, 'c', '', '', '', '', '2021-11-28 14:36:20', '2021-11-28 14:36:20'),
(4, 'g', '', '', '', '', '2021-11-28 14:36:27', '2021-11-28 14:36:27'),
(5, 'f', '', '', '', '', '2021-11-28 14:36:38', '2021-11-28 14:36:38'),
(6, 'h', '', '', '', '', '2021-11-28 14:36:45', '2021-11-28 14:36:45'),
(7, 'nn', '', '', '', '', '2021-11-28 14:36:52', '2021-11-28 14:36:52'),
(8, 'fff', '', '', '', '', '2021-11-28 14:37:00', '2021-11-28 14:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genries_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customers_id` bigint(20) UNSIGNED DEFAULT NULL,
  `prensh_id` bigint(20) UNSIGNED DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `drower_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ship_consignee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_consignee_adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_consignee_phone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_consignee_phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_code_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sihptols`
--

CREATE TABLE `sihptols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sihptols_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sihptols_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sihptols_prodect_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sihptols_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sihptols_total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipments_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenshes_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_prenshes_id_foreign` (`prenshes_id`);

--
-- Indexes for table `drowers`
--
ALTER TABLE `drowers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drowers_prensh_id_foreign` (`prensh_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_genries_id_foreign` (`genries_id`),
  ADD KEY `expenses_drowers_id_foreign` (`drowers_id`),
  ADD KEY `expenses_prenshes_id_foreign` (`prenshes_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genries`
--
ALTER TABLE `genries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genries_prensh_id_foreign` (`prensh_id`);

--
-- Indexes for table `loges`
--
ALTER TABLE `loges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prenshes`
--
ALTER TABLE `prenshes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipments_genries_id_foreign` (`genries_id`),
  ADD KEY `shipments_customers_id_foreign` (`customers_id`),
  ADD KEY `shipments_prensh_id_foreign` (`prensh_id`),
  ADD KEY `shipments_store_id_foreign` (`store_id`),
  ADD KEY `shipments_drower_id_foreign` (`drower_id`);

--
-- Indexes for table `sihptols`
--
ALTER TABLE `sihptols`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sihptols_shipments_id_foreign` (`shipments_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_prenshes_id_foreign` (`prenshes_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drowers`
--
ALTER TABLE `drowers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genries`
--
ALTER TABLE `genries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loges`
--
ALTER TABLE `loges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prenshes`
--
ALTER TABLE `prenshes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sihptols`
--
ALTER TABLE `sihptols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_prenshes_id_foreign` FOREIGN KEY (`prenshes_id`) REFERENCES `prenshes` (`id`);

--
-- Constraints for table `drowers`
--
ALTER TABLE `drowers`
  ADD CONSTRAINT `drowers_prensh_id_foreign` FOREIGN KEY (`prensh_id`) REFERENCES `prenshes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_drowers_id_foreign` FOREIGN KEY (`drowers_id`) REFERENCES `drowers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expenses_genries_id_foreign` FOREIGN KEY (`genries_id`) REFERENCES `genries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expenses_prenshes_id_foreign` FOREIGN KEY (`prenshes_id`) REFERENCES `prenshes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `genries`
--
ALTER TABLE `genries`
  ADD CONSTRAINT `genries_prensh_id_foreign` FOREIGN KEY (`prensh_id`) REFERENCES `prenshes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `shipments_customers_id_foreign` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shipments_drower_id_foreign` FOREIGN KEY (`drower_id`) REFERENCES `drowers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shipments_genries_id_foreign` FOREIGN KEY (`genries_id`) REFERENCES `genries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shipments_prensh_id_foreign` FOREIGN KEY (`prensh_id`) REFERENCES `prenshes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shipments_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sihptols`
--
ALTER TABLE `sihptols`
  ADD CONSTRAINT `sihptols_shipments_id_foreign` FOREIGN KEY (`shipments_id`) REFERENCES `shipments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_prenshes_id_foreign` FOREIGN KEY (`prenshes_id`) REFERENCES `prenshes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `personal`
--
CREATE DATABASE IF NOT EXISTS `personal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `personal`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_21_211808_create_permission_tables', 1),
(5, '2021_11_28_221453_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'الصفحه الرئيسه', 'web', '2021-12-05 20:11:21', '2021-12-05 20:11:21'),
(2, 'المستخدمين والصلاحيات', 'web', '2021-12-05 20:11:21', '2021-12-05 20:11:21'),
(3, 'اداره المستخدمين', 'web', '2021-12-05 20:11:21', '2021-12-05 20:11:21'),
(4, 'الوظائف', 'web', '2021-12-05 20:11:21', '2021-12-05 20:11:21'),
(5, 'الاعدادت', 'web', '2021-12-05 20:11:21', '2021-12-05 20:11:21'),
(6, 'الاعدادت العامه', 'web', '2021-12-05 20:11:22', '2021-12-05 20:11:22'),
(7, 'اعدادت المستخدمين', 'web', '2021-12-05 20:11:22', '2021-12-05 20:11:22'),
(8, 'الاحصائات', 'web', '2021-12-05 20:11:22', '2021-12-05 20:11:22'),
(9, 'المساعده', 'web', '2021-12-05 20:11:22', '2021-12-05 20:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'owner', 'web', '2021-12-05 20:11:22', '2021-12-05 20:11:22'),
(2, 'admin', 'web', '2021-12-05 20:11:23', '2021-12-05 20:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 1),
(9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'compnyname', 'personal web-site', NULL, '2021-12-05 20:12:28'),
(2, 'faks', '25021356', NULL, '2021-12-05 20:12:28'),
(3, 'manger', 'ahmed gabril', NULL, '2021-12-05 20:12:28'),
(4, 'phone', '01092586526', NULL, '2021-12-05 20:12:28'),
(5, 'address', 'كفر الشيخ ', NULL, '2021-12-05 20:12:28'),
(6, 'phone2', '01000000140', NULL, '2021-12-05 20:12:28'),
(7, 'email', 'ahmed@gmail.com', NULL, '2021-12-05 20:12:28'),
(8, 'darkmode', '0', NULL, NULL),
(9, 'sidebar', 'open', NULL, NULL),
(10, 'sitename', 'one click', NULL, NULL),
(11, 'logo', '/dist/img/AdminLTELogo.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rolename` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `darkmode` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rolename`, `status`, `darkmode`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Example Admin User', 'admin@test.com', '2021-12-05 20:11:23', '$2y$10$wcNGa9jK/fOsegQxcYUWOugyjyy8oxR./U/oTQvF8yki63gKJrqui', NULL, 1, 0, NULL, '7Cq8J9XBDj', '2021-12-05 20:11:23', '2021-12-05 20:11:23'),
(2, 'Ahmed Gabril', 'owner@test.com', '2021-12-05 20:11:24', '$2y$10$HYU8wYvM92v9gUbkGKSgEusv29kJgsYyJIE1inzXkdvuV24UPyTNa', NULL, 1, 0, NULL, '6SNUsWybZf', '2021-12-05 20:11:24', '2021-12-05 20:11:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"myprofile\",\"table\":\"role_has_permissions\"},{\"db\":\"myprofile\",\"table\":\"permissions\"},{\"db\":\"myprofile\",\"table\":\"roles\"},{\"db\":\"myprofile\",\"table\":\"users\"},{\"db\":\"myprofile\",\"table\":\"settings\"},{\"db\":\"myprofile\",\"table\":\"portfolios\"},{\"db\":\"myprofile\",\"table\":\"feedback\"},{\"db\":\"myprofile\",\"table\":\"catogeries\"},{\"db\":\"myprofile\",\"table\":\"services\"},{\"db\":\"blank\",\"table\":\"users\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'blank', 'permissions', '{\"sorted_col\":\"`permissions`.`name` ASC\"}', '2021-11-24 22:46:23'),
('root', 'blank', 'users', '{\"sorted_col\":\"`users`.`darkmode`  DESC\"}', '2021-12-05 16:12:44'),
('root', 'myprofile', 'portfolios', '{\"sorted_col\":\"`portfolios`.`project_url` ASC\"}', '2021-12-28 01:44:21'),
('root', 'myprofile', 'skills', '{\"sorted_col\":\"`skills`.`name` ASC\"}', '2021-12-12 06:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-01-18 23:10:31', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":223}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
