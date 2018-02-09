TYPE=TRIGGERS
triggers='CREATE DEFINER=``@`` trigger tz_tj\nafter insert on tz\nfor each row\ninsert into tznr (tz_id,hfid,name,rq)values(new.tz_id,0,new.name,new.rq)' 'CREATE DEFINER=``@`` trigger tz_sc\nafter delete on tz\nfor each row\ndelete from tznr where tz_id=old.tz_id'
sql_modes=1344274432 1344274432
definers='@' '@'
client_cs_names='utf8' 'utf8'
connection_cl_names='utf8_general_ci' 'utf8_general_ci'
db_cl_names='utf8_general_ci' 'utf8_general_ci'
