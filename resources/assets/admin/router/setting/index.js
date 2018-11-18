//
// The file is defined "/setting" route.
//
// @author wufly <fei.wu@waiwaimall.com>
//
import Setting from '../../component/setting';
import Base from '../../component/setting/Base';

// Pages


const settingRouter = {
    path: 'setting',
    component: Setting,
    children: [
        { path: '', component: Base }
    ]
};

export default settingRouter;
