--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(50) NOT NULL,
  `description` varchar(1000),
  `photo` varchar(255) NOT NULL
);

--
-- Dumping data for table `food_customer`
--

INSERT INTO `faculty` (`id`, `name`, `designation`, `qualification`, `room_no`, `email`, `department`, `description`, `photo`) VALUES
(1, 'A.Srikrishna', 'Professor & HOD', 'M.S., M.Tech., Ph.D.', 'HT101', 'ask@rvrjc.ac.in', 'Information Technology', 'Takes all the responsibility to manage and take care of the particular department properly. Employed by higher education institutions and divide their time between research, teaching, and academic services. Acts as mentor to new member of academic staff in department', './images/ask.jfif'),
(2, 'B.Venkateswarlu', 'Associate Professor', 'M.S., M.Tech.', 'HT102', 'bvlu@rvrjc.ac.in', 'Information Technology', 'Takes the responsibilities which include teaching a number of classes and seminars, attending conferences, conducting research, and supervising students. Can be able to collaborate with colleagues, advise teaching assistants, and tackle several administrative tasks.', './images/bvlu.jpg'),
(3, 'G.Srinivasa Rao', 'Associate Professor', 'M.S., M.Tech.', 'HT103', 'gsrao@rvrjc.ac.in', 'Information Technology', 'Takes the responsibilities which include teaching a number of classes and seminars, attending conferences, conducting research, and supervising students. Can be able to collaborate with colleagues, advise teaching assistants, and tackle several administrative tasks.', './images/gsrao.jfif'),
(4, 'M.Pompapathi', 'Associate Professor', 'M.Tech., Ph.D.', 'HT104', 'mp@rvrjc.ac.in', 'Information Technology', 'Takes the responsibilities which include teaching a number of classes and seminars, attending conferences, conducting research, and supervising students. Can be able to collaborate with colleagues, advise teaching assistants, and tackle several administrative tasks.', './images/mpp.jpg'),
(5, 'V.Sesha Srinivas', 'Associate Professor', 'M.Tech., Ph.D.', 'HT105', 'vss@rvrjc.ac.in', 'Information Technology', 'Takes the responsibilities which include teaching a number of classes and seminars, attending conferences, conducting research, and supervising students. Can be able to collaborate with colleagues, advise teaching assistants, and tackle several administrative tasks.', './images/ss.jpg'),
(6, 'M.V.Bhujanga Rao', 'Assistant Professor', 'M.Tech.', 'HT201', 'bujji@rvrjc.ac.in', 'Information Technology', 'Assist professors, guide and supervise graduates, and spend time conducting investigations and studies.', './images/mvbr.bmp'),
(7, 'N.Neelima', 'Assistant Professor', 'M.Tech.', 'HT202', 'nn@rvrjc.ac.in', 'Information Technology', 'Assist professors, guide and supervise graduates, and spend time conducting investigations and studies.', './images/nn.jpg'),
(8, 'I.Naga Padmaja', 'Assistant Professor', 'MCA., M.Tech.', 'HT203', 'inp@rvrjc.ac.in', 'Information Technology', 'Assist professors, guide and supervise graduates, and spend time conducting investigations and studies.', './images/inp.jpg'),
(9, 'B.Manasa', 'Assistant Professor', 'M.Tech.', 'HT204', 'manasa@rvrjc.ac.in', 'Information Technology', 'Assist professors, guide and supervise graduates, and spend time conducting investigations and studies.', './images/bm.jpg'),
(10, 'BH.Krishna Mohan', 'Assistant Professor', 'MCA., M.Tech.', 'HT205', 'bkrishnamohan@rvrjc.ac.in', 'Information Technology', '', './images/bkm.jpg'),
(11, 'V.Venkata Srinivasu', 'Assistant Professor', 'M.Tech.', 'HT301', 'vvsv@rvrjc.ac.in', 'Information Technology', 'Assist professors, guide and supervise graduates, and spend time conducting investigations and studies.', './images/vvs.jpg'),
(12, 'B.Satish Babu', 'Assistant Professor', 'M.Tech.', 'HT302', 'bsb@rvrjc.ac.in', 'Information Technology', 'Assist professors, guide and supervise graduates, and spend time conducting investigations and studies.', './images/bsb.jpg'),
(13, 'K.Gowrisankar', 'Assistant Professor', 'M.Tech.', 'HT303', 'gowrisankark@rvrjc.ac.in', 'Information Technology', 'Assist professors, guide and supervise graduates, and spend time conducting investigations and studies.', './images/kgs.jfif'),
(14, 'G.Swetha', 'Assistant Professor', 'M.Tech.', 'HT304', 'gswetha@rvrjc.ac.in', 'Information Technology', 'Assist professors, guide and supervise graduates, and spend time conducting investigations and studies.', './images/gs.jpg'),
(15, 'A.Yaswanth Kumar', 'Assistant Professor', 'M.Tech.', 'HT305', 'aykumar@rvrjc.ac.in', 'Information Technology', 'Assist professors, guide and supervise graduates, and spend time conducting investigations and studies.', './images/ayk.jpg');

--
-- Indexes for table `food_customer`
--

ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

