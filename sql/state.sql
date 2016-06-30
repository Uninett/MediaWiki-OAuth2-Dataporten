--
-- extension Dataporten state SQL schema
--
CREATE TABLE /*_*/`dataporten_states` (
  `state` VARCHAR(255) NOT NULL,
  `return_to` VARCHAR(45) NULL,
  PRIMARY KEY (`state`),
  UNIQUE INDEX `state_UNIQUE` (`state` ASC));