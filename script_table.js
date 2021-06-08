

var table = {
    table1: {
        sz_b: 1, sz_b_copy: 2, sz_c: 3, sz_c_copy: 4,
        u_sz_b: 5, u_sz_b_copy: 6,
                                sz_b_11: 7, sz_b_11_copy: 8,
        sm_b: 9, sm_b_copy: 10,
        zo_b: 11, zo_b_copy: 12, zo_c: 13, zo_c_copy: 14,
        er_b: 15, er_b_copy: 16,
        sp_b: 17, sp_b_copy: 18,
        bk_b: 19, bk_b_copy: 20, bk_c: 21, bk_c_copy: 22,
        t1_itog1: 1, t1_itog2: 2, t1_itog3: 3, t1_itog4: 4

    },
    table2: {
        z_sz_b: 1, z_sz_b_copy: 1, z_sz_c: 1, z_sz_c_copy: 1,
        z_sm_b: 2, z_sm_b_copy: 2, z_sm_c: 2, z_sm_c_copy: 2,
        z_zo_b: 3, z_zo_b_copy: 3, z_zo_c: 3, z_zo_c_copy: 3,
                                   z_er_c: 4, z_er_c_copy: 4,
        t2_itog1:5, t2_itog2: 5, t2_itog3:5, t2_itog4: 5,

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
