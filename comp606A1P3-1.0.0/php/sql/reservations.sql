CREATE TABLE `reservations` (
  `res_id` int(11) NOT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_email` varchar(255) NOT NULL,
  `res_tel` varchar(60) NOT NULL,
  `res_notes` text,
  `res_date` date DEFAULT NULL,
  `res_slot` varchar(8) DEFAULT NULL,
  `res_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `res_name` (`res_name`),
  ADD KEY `res_email` (`res_email`),
  ADD KEY `res_tel` (`res_tel`),
  ADD KEY `res_date` (`res_date`),
  ADD KEY `res_slot` (`res_slot`),
  ADD KEY `res_type` (`res_type`);

ALTER TABLE `reservations`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;