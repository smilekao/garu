<?php

// �p�����^����u�ǂݍ��ރf�[�^�̃v���C�}���L�[�v���擾�F���ӂ̂���update
// $id = $_GET['id'];
$id = "1;UPDATE practice_5 SET data='crack';--";

// SQL�̑g�ݗ���
$sql = "SELECT * FROM practice_5 WHERE practice_id={$id};";

// �u�g�ݗ��Ă�SQL�v�̕\��
echo $sql;
