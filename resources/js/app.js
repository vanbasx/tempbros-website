import dymanicAdaptInit from "./dynamicAdapt";
import searchFormInit from "./searchForm";
import sidebarMenuInit from "./sidebarMenu";

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);


searchFormInit();
sidebarMenuInit();
dymanicAdaptInit();