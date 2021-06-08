var table = {
    table1: {
        sz_b: 0, sz_b_copy: 0, sz_c: 0, sz_c_copy: 0,
        u_sz_b: 0, u_sz_b_copy: 0,
                                sz_b_11: 0, sz_b_11_copy: 0,
        sm_b: 0, sm_b_copy: 0,
        zo_b: 1, zo_b_copy: 0, zo_c: 1, zo_c_copy: 0,
        er_b: 0, er_b_copy: 0,
        sp_b: 0, sp_b_copy: 0,
        bk_b: 0, bk_b_copy: 0, bk_c: 0, bk_c_copy: 0,
        t1_itog1: 0, t1_itog2: 0, t1_itog3: 0, t1_itog4: 0

    },
    table2: {
        z_sz_b: 0, z_sz_b_copy: 0, z_sz_c: 0, z_sz_c_copy: 0,
        z_sm_b: 3, z_sm_b_copy: 0, z_sm_c: 0, z_sm_c_copy: 0,
        z_zo_b: 0, z_zo_b_copy: 0, z_zo_c: 0, z_zo_c_copy: 0,
                                   z_er_c: 0, z_er_c_copy: 0,
        t2_itog1: 0, t2_itog2: 0, t2_itog3:0, t2_itog4: 0,

    },
  };
  var json = JSON.stringify(table);
  var data = JSON.parse(json);

  for (var i in data.table1) {
    document.getElementById(i).innerHTML = data.table1[i];
  }

  for (var i in data.table2) {
    document.getElementById(i).innerHTML = data.table2[i];
  }
