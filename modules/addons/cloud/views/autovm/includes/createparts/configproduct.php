<!-- Configure plans -->
<div class="row m-0 p-0 py-5 my-5">    
    <div class="col-12" style="--bs-bg-opacity: 0.1;">
        
        <!-- title -->
        <div class="row">
            <div class="m-0 p-0">
                <span class="text-dark h3">
                    Configure plans
                </span>
            </div>
            <div class="m-0 p-0">
                <span class="fs-6 pt-1 pb-4 text-secondary">
                    Configure this plan in your favore
                </span>
            </div>
        </div>
    
        <!-- No selection -->
        <div v-if="!planIsSelected" class="row mt-5">
            <div class="col-12 mb-5" >
                <div class="alert alert-primary border-0" role="alert" style="--bs-alert-bg: #cfe2ff73; --bs-alert-border-color: #9ec5fe6e;">
                    Please, select a Plan first form above list
                </div>
            </div>
        </div>

        <div v-if="planIsSelected" class="m-0 p-0">
        
            <!-- Traffic -->
            <div class="row">
                <!-- small -->
                <div class="d-block d-md-none m-0 p-0">
                    <div class="col-12 mt-3 mb-3" style="width: 140px !important;">
                        <span class="d-flex flex-row justify-content-start align-items-center ms-3">
                            <i class="bi bi-cloud-download text-secondary p-0 m-0 h4"></i>
                            <span class="p-0 m-0 h5 ms-3">
                                Traffic
                            </span>
                        </span>
                    </div>
                </div>
                <!-- medium -->
                <div class="d-flex flex-row justify-content-between align-items-center pt-0 pt-md-5">
                    <div class="d-none d-md-block">
                        <span class="d-flex flex-row justify-content-start align-items-center" style="width: 140px !important;">
                            <i class="bi bi-cloud-download text-secondary p-0 m-0 pe-3 h4"></i>
                            <span class="p-0 m-0 me-3 h5">
                                Traffic
                            </span>
                        </span>
                    </div>    
                    <input v-model="RangeValueTraffic" type="range" class="form-range w-100" :min="config.planConfig.Traffic.min" :max="config.planConfig.Traffic.max" :step="config.planConfig.Traffic.step" id="TrafficPriceRange">
                </div>
                <div v-if="RangeValueTraffic != null" class="d-flex flex-row justify-content-end align-items-center pb-4 pb-md-2">
                    <p class="p-0 m-0 btn btn-secondary px-4 me-3 btn-sm py-2">
                        {{ RangeValueTraffic }} GB
                    </p>
                    <p class="p-0 m-0 btn btn-secondary px-4 ms-3 btn-sm py-2">
                        {{ formatNumberMonthly(RangeValueTraffic*planTrafficPrice) }} {{ config.AutovmDefaultCurrencySymbol }}
                    </p>
                </div>
            </div>
            

            <!-- Memory -->
            <div class="row">
                <!-- small -->
                <div class="d-block d-md-none m-0 p-0">
                    <div class="col-12 mt-3 mb-3" style="width: 140px !important;">
                        <span class="d-flex flex-row justify-content-start align-items-center ms-3">
                            <img src="/modules/servers/product/views/view/assets/img/ramicon.svg" alt="Memory">
                            <span class="p-0 m-0 h5 ms-3">
                                Memory
                            </span>
                        </span>
                    </div>
                </div>
                <!-- medium -->
                <div class="d-flex flex-row justify-content-between align-items-center pt-0 pt-md-5">
                    <div class=" d-none d-md-block">
                        <span class="d-flex flex-row justify-content-start align-items-center" style="width: 140px !important;">
                            <img class="text-secondary p-0 m-0 pe-3" src="/modules/servers/product/views/view/assets/img/ramicon.svg" alt="Memory">
                            <span class="p-0 m-0 me-3 h5">
                                Memory
                            </span>
                        </span>
                    </div>
                    <input v-model="RangeValueMemory" type="range" class="form-range" :min="config.planConfig.Memory.min" :max="config.planConfig.Memory.max" :step="config.planConfig.Memory.step" id="MemoryPriceRange">
                </div>
                <div v-if="RangeValueMemory != null" class="d-flex flex-row justify-content-end align-items-center pb-4 pb-md-2">
                    <p class="p-0 m-0 btn btn-secondary px-4 me-3 btn-sm py-2">
                        {{ RangeValueMemory }} GB
                    </p>
                    <p class="p-0 m-0 btn btn-secondary px-4 ms-3 btn-sm py-2">
                        {{ formatNumberMonthly(RangeValueMemory*planMemoryPrice) }} {{ config.AutovmDefaultCurrencySymbol }}
                    </p>
                </div>
            </div>


            <!-- CpuCore -->
            <div class="row">
                <!-- small -->
                <div class="d-block d-md-none m-0 p-0">
                    <div class="col-12 mt-3 mb-3" style="width: 140px !important;">
                        <span class="d-flex flex-row justify-content-start align-items-center ms-3">
                            <img src="/modules/servers/product/views/view/assets/img/cpuicon.svg" alt="CpuCore">
                            <span class="p-0 m-0 h5 ms-3">
                            CpuCore
                            </span>
                        </span>
                    </div>
                </div>
                <!-- medium -->
                <div class="d-flex flex-row justify-content-between align-items-center pt-0 pt-md-5">
                    <div class=" d-none d-md-block">
                        <span class="d-flex flex-row justify-content-start align-items-center" style="width: 140px !important;">
                            <img class="text-secondary p-0 m-0 pe-3" src="/modules/servers/product/views/view/assets/img/cpuicon.svg" alt="CpuCore">
                            <span class="p-0 m-0 me-3 h5">
                            CpuCore
                            </span>
                        </span>
                    </div>
                    <input v-model="RangeValueCpuCore" type="range" class="form-range" :min="config.planConfig.CpuCore.min" :max="config.planConfig.CpuCore.max" :step="config.planConfig.CpuCore.step" id="CpuCorePriceRange">
                </div>
                <div v-if="RangeValueCpuCore != null" class="d-flex flex-row justify-content-end align-items-center pb-4 pb-md-2">
                    <p class="p-0 m-0 btn btn-secondary px-4 me-3 btn-sm py-2">
                        {{ RangeValueCpuCore }} GB
                    </p>
                    <p class="p-0 m-0 btn btn-secondary px-4 ms-3 btn-sm py-2">
                        {{ formatNumberMonthly(RangeValueCpuCore*planCpuCorePrice) }} {{ config.AutovmDefaultCurrencySymbol }}
                    </p>
                </div>
            </div>



            <!-- CpuLimit -->
            <div class="row">
                <!-- small -->
                <div class="d-block d-md-none m-0 p-0">
                    <div class="col-12 mt-3 mb-3" style="width: 140px !important;">
                        <span class="d-flex flex-row justify-content-start align-items-center">
                            <i class="bi bi-cpu-fill text-secondary p-0 m-0 h4 ms-3"></i>
                            <span class="p-0 m-0 h5 ms-3">
                            CpuLimit
                            </span>
                        </span>
                    </div>
                </div>
                <!-- medium -->
                <div class="d-flex flex-row justify-content-between align-items-center pt-0 pt-md-5">
                    <div class=" d-none d-md-block">
                        <span class="d-flex flex-row justify-content-start align-items-center" style="width: 140px !important;">
                            <i class="bi bi-cpu-fill text-secondary p-0 m-0 pe-3 h4"></i>
                            <span class="p-0 m-0 me-3 h5">
                            CpuLimit
                            </span>
                        </span>
                    </div>
                    <input v-model="RangeValueCpuLimit" type="range" class="form-range" :min="config.planConfig.CpuLimit.min" :max="config.planConfig.CpuLimit.max" :step="config.planConfig.CpuLimit.step" id="CpuLimitPriceRange">
                </div>
                <div v-if="RangeValueCpuLimit != null" class="d-flex flex-row justify-content-end align-items-center pb-4 pb-md-2">
                    <p class="p-0 m-0 btn btn-secondary px-4 me-3 btn-sm py-2">
                        {{ RangeValueCpuLimit }} GB
                    </p>
                    <p class="p-0 m-0 btn btn-secondary px-4 ms-3 btn-sm py-2">
                        {{ formatNumberMonthly(RangeValueCpuLimit*planCpuLimitPrice) }} {{ config.AutovmDefaultCurrencySymbol }}
                    </p>
                </div>
            </div>

            <!-- Disk -->
            <div class="row">
                <!-- small -->
                <div class="d-block d-md-none m-0 p-0">
                    <div class="col-12 mt-3 mb-3" style="width: 140px !important;">
                        <span class="d-flex flex-row justify-content-start align-items-center">
                            <i class="bi bi-device-hdd bi bi-hdd-network text-secondary p-0 m-0 h4 ms-3"></i>
                            <span class="p-0 m-0 h5 ms-3">
                            Disk
                            </span>
                        </span>
                    </div>
                </div>
                <!-- medium -->
                <div class="d-flex flex-row justify-content-between align-items-center pt-0 pt-md-5">
                    <div class=" d-none d-md-block">
                        <span class="d-flex flex-row justify-content-start align-items-center" style="width: 140px !important;">
                            <i class="bi bi-device-hdd text-secondary p-0 m-0 pe-3 h4"></i>
                            <span class="p-0 m-0 me-3 h5">
                            Disk
                            </span>
                        </span>
                    </div>
                    <input v-model="RangeValueDisk" type="range" class="form-range" :min="config.planConfig.Disk.min" :max="config.planConfig.Disk.max" :step="config.planConfig.Disk.step" id="DiskPriceRange">
                </div>
                <div v-if="RangeValueDisk != null" class="d-flex flex-row justify-content-end align-items-center pb-4 pb-md-2">
                    <p class="p-0 m-0 btn btn-secondary px-4 me-3 btn-sm py-2">
                        {{ RangeValueDisk }} GB
                    </p>
                    <p class="p-0 m-0 btn btn-secondary px-4 ms-3 btn-sm py-2">
                        {{ formatNumberMonthly(RangeValueDisk*planDiskPrice) }} {{ config.AutovmDefaultCurrencySymbol }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end plan -->