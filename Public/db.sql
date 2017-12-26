#2017-12-25
CREATE TABLE IF NOT EXISTS `physical_company` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT '' COMMENT '公司名称',
  `state` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '状态：0正常，1删除',
  `created` INT NOT NULL DEFAULT 0 COMMENT '创建时间',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COMMENT = '发货公司表';

CREATE TABLE IF NOT EXISTS `physical_unit` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(255) DEFAULT '' COMMENT '计量单位名称',
  `state` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '状态：0正常，1删除',
  `created` INT NOT NULL DEFAULT 0 COMMENT '创建时间',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COMMENT = '货物计量单位表';

CREATE TABLE IF NOT EXISTS `physical_dispatching_list` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `company_id` INT NOT NULL DEFAULT 0 COMMENT '所属发货公司',
  `unit_id` INT NOT NULL DEFAULT 0 COMMENT '货物计量单位(方/吨)',
  `dispatching_time` varchar(255) DEFAULT '' COMMENT '发货时间',
  `check_number` varchar(255) DEFAULT '' COMMENT '托运单号',
  `check` varchar(255) DEFAULT '' COMMENT '托运单位及电话',
  `goods_name` varchar(255) DEFAULT '' COMMENT '货物名称',
  `goods_number` INT NOT NULL DEFAULT 0 COMMENT '货物数量',
  `destination` varchar(255) DEFAULT '' COMMENT '目的地名称',
  `consignor` varchar(255) DEFAULT '' COMMENT '发货人及电话',
  `receiver` varchar(255) DEFAULT '' COMMENT '收货人及电话',
  `freight_total` INT NOT NULL DEFAULT 0 COMMENT '费用总计(元)',
  `remark` varchar(255) DEFAULT '' COMMENT '备注',
  `created` INT NOT NULL DEFAULT 0 COMMENT '创建时间',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COMMENT = '发货详情表';