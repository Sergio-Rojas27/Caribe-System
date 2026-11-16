<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
            <div>
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-caribe-redLight text-caribe-red dark:bg-caribe-red/20 dark:border dark:border-caribe-red/40 dark:text-caribe-redLight text-xs font-bold uppercase tracking-wider mb-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-caribe-red animate-pulse"></span>
                    Panel de Monitoreo Vehicular
                </div>
                <h1 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white tracking-tight">
                    Hola, {{ Auth::user()->name }} 👋
                </h1>
                <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 mt-1">
                    Control biométrico de tu auto, alertas preventivas y citas en Multiservicios Caribe Atlántico.
                </p>
            </div>

            <!-- Botones Rápidos -->
            <div class="flex items-center gap-3">
                <a href="#agendar-cita" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-extrabold shadow-lg shadow-caribe-red/30 transition transform hover:-translate-y-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>Agendar Cita en Taller</span>
                </a>

                <a href="#tarjeta-vida" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-slate-300 bg-white hover:bg-slate-50 text-slate-700 dark:bg-white/10 dark:hover:bg-white/20 dark:border-white/15 dark:text-white text-xs font-bold transition shadow-2xs">
                    <svg class="w-4 h-4 text-caribe-blueAtlantic dark:text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>Ver Ficha</span>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12" x-data="{ 
        odometro: 78750, 
        nuevoKm: '',
        actualizarKm() {
            if(this.nuevoKm && this.nuevoKm > this.odometro) {
                this.odometro = parseInt(this.nuevoKm);
                this.nuevoKm = '';
                alert('¡Kilometraje actualizado correctamente en tu Tarjeta de Vida Vehicular!');
            }
        },
        citaServicio: 'Mantenimiento Preventivo Integral',
        citaFecha: '{{ date('Y-m-d', strtotime('+2 days')) }}',
        citaTurno: 'Mañana (8:00 AM - 12:00 PM)',
        citaNotas: '',
        citaEnviada: false,
        agendar() {
            this.citaEnviada = true;
        }
    }">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 space-y-12 sm:space-y-16">

            <!-- FILA DE MÉTRICAS / KPIS ADAPTABLES A MODO CLARO Y OSCURO -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- KPI 1: Salud Vehicular -->
                <div class="p-6 rounded-3xl bg-white border border-emerald-200 shadow-sm dark:bg-gradient-to-br dark:from-[#0B2545] dark:to-[#07162C] dark:border-emerald-500/30 dark:shadow-xl relative overflow-hidden group transition-colors">
                    <div class="absolute -right-8 -top-8 w-24 h-24 bg-emerald-500/10 rounded-full blur-2xl group-hover:bg-emerald-500/20 transition-all"></div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-300">Salud General</span>
                        <span class="px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 border border-emerald-200 dark:bg-emerald-500/20 dark:text-emerald-300 dark:border-emerald-500/30 text-xs font-black">
                            94%
                        </span>
                    </div>
                    <div class="text-2xl font-black text-slate-900 dark:text-white">Estado Óptimo</div>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Toyota Corolla • AB123CD</p>
                    <div class="w-full bg-slate-100 dark:bg-slate-800 rounded-full h-2 mt-4 overflow-hidden border border-slate-200 dark:border-white/5">
                        <div class="bg-gradient-to-r from-emerald-500 to-teal-400 h-2 rounded-full" style="width: 94%"></div>
                    </div>
                </div>

                <!-- KPI 2: Alerta Preventiva -->
                <div class="p-6 rounded-3xl bg-red-50/70 border border-red-200 shadow-sm dark:bg-gradient-to-br dark:from-[#2D0B0E] dark:via-[#1D0608] dark:to-[#0A192F] dark:border-red-500/40 dark:shadow-xl relative overflow-hidden group transition-colors">
                    <div class="absolute -right-8 -top-8 w-24 h-24 bg-caribe-red/10 dark:bg-caribe-red/20 rounded-full blur-2xl group-hover:bg-caribe-red/30 transition-all"></div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-caribe-red dark:text-red-300">Alerta Preventiva</span>
                        <span class="px-2.5 py-1 rounded-full bg-caribe-redLight text-caribe-red border border-red-200 dark:bg-red-500/30 dark:text-red-200 dark:border-red-500/40 text-[10px] font-black uppercase tracking-wider">
                            ¡Próximo!
                        </span>
                    </div>
                    <div class="text-2xl font-black text-caribe-red dark:text-white">En 1,250 km</div>
                    <p class="text-xs text-red-700 dark:text-red-200 mt-1">Aceite 10W-30 & Filtro Sellado</p>
                    <div class="w-full bg-red-100 dark:bg-slate-800 rounded-full h-2 mt-4 overflow-hidden border border-red-200 dark:border-white/5">
                        <div class="bg-gradient-to-r from-amber-500 to-caribe-red h-2 rounded-full" style="width: 82%"></div>
                    </div>
                </div>

                <!-- KPI 3: Cita en Taller -->
                <div class="p-6 rounded-3xl bg-sky-50/70 border border-sky-200 shadow-sm dark:bg-gradient-to-br dark:from-[#06203D] dark:to-[#0A192F] dark:border-sky-500/40 dark:shadow-xl relative overflow-hidden group transition-colors">
                    <div class="absolute -right-8 -top-8 w-24 h-24 bg-sky-500/15 rounded-full blur-2xl group-hover:bg-sky-500/25 transition-all"></div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-slate-300">Cita Programada</span>
                        <span class="w-8 h-8 rounded-xl bg-sky-100 text-sky-700 dark:bg-sky-500/20 dark:text-sky-300 flex items-center justify-center font-bold text-xs border border-sky-200 dark:border-sky-500/30">
                            📅
                        </span>
                    </div>
                    <div class="text-2xl font-black text-slate-900 dark:text-white">Jueves, 10:00 AM</div>
                    <p class="text-xs text-caribe-blueNavy dark:text-sky-200 mt-1 font-semibold">Mantenimiento Preventivo & Frenos</p>
                    <div class="mt-4 flex items-center gap-2 text-[11px] text-emerald-600 dark:text-emerald-400 font-bold">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 dark:bg-emerald-400 animate-pulse"></span>
                        Turno Confirmado en Recinto
                    </div>
                </div>

                <!-- KPI 4: Historial en Recinto -->
                <div class="p-6 rounded-3xl bg-white border border-slate-200 shadow-sm dark:bg-gradient-to-br dark:from-[#0F1E36] dark:to-[#07162C] dark:border-slate-700 dark:shadow-xl relative overflow-hidden group transition-colors">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Servicios en Taller</span>
                        <span class="w-8 h-8 rounded-xl bg-slate-100 text-slate-700 dark:bg-white/10 dark:text-white flex items-center justify-center font-bold text-xs border border-slate-200 dark:border-white/10">
                            6
                        </span>
                    </div>
                    <div class="text-2xl font-black text-slate-900 dark:text-white">100% Garantía</div>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Repuestos & Mano de Obra</p>
                    <div class="mt-4 text-[11px] text-caribe-blueAtlantic dark:text-sky-400 font-bold flex items-center gap-1.5">
                        <span>Historial verificado en sistema</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

            </div>

            <!-- SECCIÓN: TARJETA DE VIDA VEHICULAR PERSONALIZADA -->
            <div id="tarjeta-vida" class="bg-white border border-slate-200 shadow-xl dark:bg-gradient-to-br dark:from-[#0A192F] dark:via-[#0D223E] dark:to-[#07162C] dark:border-slate-700 dark:shadow-2xl rounded-3xl overflow-hidden transition-colors">
                
                <!-- Encabezado de la Ficha / Pasaporte (Diseño Prestigio) -->
                <div class="bg-gradient-to-r from-caribe-blueDeep via-caribe-blue to-caribe-blueNavy dark:from-[#07162C] dark:via-[#0B2545] dark:to-[#0D223E] p-8 sm:p-10 text-white relative overflow-hidden">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 relative z-10">
                        <div>
                            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/10 backdrop-blur-md text-sky-200 border border-white/15 text-xs font-bold uppercase tracking-wider mb-3">
                                <span class="w-1.5 h-1.5 rounded-full bg-caribe-red animate-pulse"></span>
                                Pasaporte Automotriz Digital
                            </div>
                            <h2 class="text-2xl sm:text-3xl font-black text-white">
                                Tarjeta de Vida Vehicular
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-200 mt-1">
                                Seguimiento biométrico del desgaste mecánico en San Juan Bautista, Margarita.
                            </p>
                        </div>

                        <!-- Badge del Vehículo Vinculado -->
                        <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/15 flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-caribe-red text-white flex items-center justify-center font-black text-lg shadow-lg">
                                🚗
                            </div>
                            <div>
                                <div class="text-[10px] text-slate-300 uppercase font-bold tracking-wider">Unidad Vinculada</div>
                                <div class="text-base font-black text-white">Toyota Corolla GLi 1.8L</div>
                                <div class="flex items-center gap-2.5 text-xs mt-1">
                                    <span class="px-2 py-0.5 rounded bg-white text-slate-900 font-mono font-bold text-[10px]">PLACA: AB123CD</span>
                                    <span class="text-slate-300 text-[11px]">Año: 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Datos Rápidos de Odómetro -->
                    <div class="mt-8 pt-6 border-t border-white/10 grid grid-cols-2 sm:grid-cols-4 gap-6 text-xs">
                        <div>
                            <span class="text-slate-300 block font-medium">Odómetro Actual:</span>
                            <span class="text-lg font-mono font-black text-white" x-text="odometro.toLocaleString() + ' km'">78,750 km</span>
                        </div>
                        <div>
                            <span class="text-slate-300 block font-medium">Último Servicio en Recinto:</span>
                            <span class="text-sm font-bold text-white">75,000 km</span>
                        </div>
                        <div>
                            <span class="text-slate-300 block font-medium">Próximo Cambio de Aceite:</span>
                            <span class="text-sm font-bold text-caribe-redLight">80,000 km</span>
                        </div>
                        <div>
                            <span class="text-slate-300 block font-medium">Técnico Asignado:</span>
                            <span class="text-sm font-bold text-white">Ing. Taller Caribe</span>
                        </div>
                    </div>
                </div>

                <!-- Cuerpo de la Tarjeta: 6 Componentes Clave -->
                <div class="p-8 sm:p-10 space-y-8 bg-white dark:bg-transparent">
                    
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <h3 class="text-lg font-black text-slate-900 dark:text-white">Estado de Salud Preventivo</h3>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Semáforo de vida útil de consumibles y piezas clave.</p>
                        </div>

                        <!-- Actualizador de Km -->
                        <div class="flex items-center gap-2.5">
                            <input type="number" 
                                   x-model="nuevoKm" 
                                   placeholder="Nuevo kilometraje..." 
                                   class="text-xs py-2 px-3.5 bg-slate-50 border border-slate-300 text-slate-800 focus:bg-white focus:border-caribe-blueAtlantic dark:bg-slate-900 dark:border-slate-700 dark:text-white rounded-xl w-40 focus:ring-1 focus:ring-sky-400 outline-none transition" />
                            <button @click="actualizarKm()" 
                                    class="text-xs font-bold px-4 py-2 bg-caribe-red hover:bg-caribe-darkRed text-white rounded-xl transition shadow">
                                Actualizar
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- 1: Aceite -->
                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 dark:bg-white/5 dark:border-white/10 space-y-3 transition-colors">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-bold text-slate-900 dark:text-white flex items-center gap-2">🛢️ Aceite Semi-Sintético</span>
                                <span class="text-xs font-black text-caribe-red">82% Vida</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-2 overflow-hidden">
                                <div class="bg-gradient-to-r from-amber-500 to-caribe-red h-2 rounded-full" style="width: 82%"></div>
                            </div>
                            <div class="flex justify-between text-[11px] text-slate-500 dark:text-slate-400">
                                <span>Restan: ~1,250 km</span>
                                <span class="text-caribe-red font-bold">Cambio próximo</span>
                            </div>
                        </div>

                        <!-- 2: Frenos -->
                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 dark:bg-white/5 dark:border-white/10 space-y-3 transition-colors">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-bold text-slate-900 dark:text-white flex items-center gap-2">🛑 Pastillas Cerámicas</span>
                                <span class="text-xs font-black text-caribe-blueAtlantic dark:text-sky-400">65% Vida</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-2 overflow-hidden">
                                <div class="bg-gradient-to-r from-sky-500 to-caribe-blueAtlantic h-2 rounded-full" style="width: 65%"></div>
                            </div>
                            <div class="flex justify-between text-[11px] text-slate-500 dark:text-slate-400">
                                <span>Restan: ~6,500 km</span>
                                <span class="text-emerald-600 dark:text-emerald-400 font-bold">Seguro</span>
                            </div>
                        </div>

                        <!-- 3: Refrigerante -->
                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 dark:bg-white/5 dark:border-white/10 space-y-3 transition-colors">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-bold text-slate-900 dark:text-white flex items-center gap-2">❄️ Coolant Orgánico</span>
                                <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">90% Vida</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-2 overflow-hidden">
                                <div class="bg-emerald-500 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                            <div class="flex justify-between text-[11px] text-slate-500 dark:text-slate-400">
                                <span>Densidad óptima</span>
                                <span class="text-emerald-600 dark:text-emerald-400 font-bold">Excelente</span>
                            </div>
                        </div>

                        <!-- 4: Alineación -->
                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 dark:bg-white/5 dark:border-white/10 space-y-3 transition-colors">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-bold text-slate-900 dark:text-white flex items-center gap-2">🔄 Alineación & Rotación</span>
                                <span class="text-xs font-black text-amber-600 dark:text-amber-400">35% Vida</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-2 overflow-hidden">
                                <div class="bg-amber-500 h-2 rounded-full" style="width: 35%"></div>
                            </div>
                            <div class="flex justify-between text-[11px] text-slate-500 dark:text-slate-400">
                                <span>Restan: ~800 km</span>
                                <span class="text-amber-600 dark:text-amber-400 font-bold">Alerta preventiva</span>
                            </div>
                        </div>

                        <!-- 5: Batería -->
                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 dark:bg-white/5 dark:border-white/10 space-y-3 transition-colors">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-bold text-slate-900 dark:text-white flex items-center gap-2">⚡ Batería & Alternador</span>
                                <span class="text-xs font-black text-caribe-blueNavy dark:text-sky-400">92% Salud</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-2 overflow-hidden">
                                <div class="bg-sky-500 h-2 rounded-full" style="width: 92%"></div>
                            </div>
                            <div class="flex justify-between text-[11px] text-slate-500 dark:text-slate-400">
                                <span>12.6V en reposo</span>
                                <span class="text-emerald-600 dark:text-emerald-400 font-bold">Al día</span>
                            </div>
                        </div>

                        <!-- 6: Filtros -->
                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 dark:bg-white/5 dark:border-white/10 space-y-3 transition-colors">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-bold text-slate-900 dark:text-white flex items-center gap-2">💨 Filtro de Aire y Cabina</span>
                                <span class="text-xs font-black text-teal-600 dark:text-teal-400">78% Vida</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-2 overflow-hidden">
                                <div class="bg-teal-500 h-2 rounded-full" style="width: 78%"></div>
                            </div>
                            <div class="flex justify-between text-[11px] text-slate-500 dark:text-slate-400">
                                <span>Flujo limpio</span>
                                <span class="text-emerald-600 dark:text-emerald-400 font-bold">Normal</span>
                            </div>
                        </div>

                    </div>

                    <!-- Diagnóstico Directo del Taller -->
                    <div class="p-5 rounded-2xl bg-slate-100 border border-slate-200 dark:bg-[#050E1D] dark:border-white/10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 transition-colors">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-caribe-red text-white flex items-center justify-center shrink-0 font-black text-xs">
                                CA
                            </div>
                            <div>
                                <h5 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider">Recomendación del Taller Caribe</h5>
                                <p class="text-xs text-slate-600 dark:text-slate-300 mt-1">
                                    "Tu Toyota Corolla se mantiene en excelente condición. Te recomendamos realizar la rotación y balanceo en tu próxima visita para prolongar la vida útil de tus neumáticos en las vías de Margarita."
                                </p>
                            </div>
                        </div>
                        <a href="#agendar-cita" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-bold shrink-0 transition">
                            <span>Agendar Servicio Sugerido</span>
                        </a>
                    </div>

                </div>

            </div>

            <!-- SECCIÓN: AGENDAR CITA EN EL TALLER (SEGMENTADO Y DINÁMICO) -->
            <div id="agendar-cita" class="bg-white border border-slate-200 shadow-xl dark:bg-gradient-to-br dark:from-[#0A192F] dark:to-[#0E2442] dark:border-slate-700 dark:shadow-2xl rounded-3xl p-8 sm:p-10 transition-colors">
                
                <div class="max-w-3xl mb-8">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-caribe-redLight text-caribe-red dark:bg-caribe-red/20 dark:border dark:border-caribe-red/40 dark:text-caribe-redLight text-xs font-bold uppercase tracking-wider mb-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-caribe-red"></span>
                        Reserva Online Prioritaria
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white">
                        Agendar Cita en el Taller Mecánico
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1">
                        Elige el servicio y turno que más te convenga. Asignamos técnico y fosa previo a tu llegada.
                    </p>
                </div>

                <!-- Confirmación de Cita -->
                <div x-show="citaEnviada" 
                     x-transition 
                     class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 dark:bg-emerald-950/80 dark:border-emerald-500/40 dark:text-emerald-200 mb-8"
                     style="display: none;">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500 text-white flex items-center justify-center font-black text-lg shrink-0">
                            ✓
                        </div>
                        <div class="flex-1">
                            <h4 class="text-base font-bold text-slate-900 dark:text-white">¡Cita Registrada con Éxito en Caribe Atlántico!</h4>
                            <p class="text-xs text-emerald-800 dark:text-emerald-300 mt-1">
                                Solicitud para <strong x-text="citaServicio"></strong> el día <strong x-text="citaFecha"></strong> (<span x-text="citaTurno"></span>) con código <strong>#CITA-2026-8842</strong>.
                            </p>
                            <div class="mt-4 flex flex-wrap items-center gap-4">
                                <a :href="'https://wa.me/584122050350?text=' + encodeURIComponent('Hola Multiservicios Caribe Atlántico, he reservado una cita para mi Toyota Corolla AB123CD para el servicio de: ' + citaServicio + ' el día ' + citaFecha + ' (' + citaTurno + '). Código: #CITA-2026-8842')" 
                                   target="_blank" 
                                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold shadow transition">
                                    <span>Confirmar por WhatsApp Inmediato</span>
                                </a>
                                <button @click="citaEnviada = false" class="text-xs font-semibold text-slate-600 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white underline">
                                    Agendar otra cita
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <form @submit.prevent="agendar()" x-show="!citaEnviada" class="space-y-8">
                    
                    <!-- Selección de Servicio con Chips -->
                    <div>
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-3">
                            Selecciona el Tipo de Servicio
                        </label>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 text-xs">
                            <button type="button" 
                                    @click="citaServicio = 'Mantenimiento Preventivo Integral'"
                                    :class="citaServicio === 'Mantenimiento Preventivo Integral' ? 'bg-caribe-red text-white border-caribe-red' : 'bg-slate-100 text-slate-700 border-slate-200 hover:bg-slate-200 dark:bg-white/5 dark:text-slate-300 dark:border-white/10 dark:hover:bg-white/10'"
                                    class="p-3.5 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>🛠️</span>
                                <span>Preventivo Integral</span>
                            </button>

                            <button type="button" 
                                    @click="citaServicio = 'Cambio de Aceite y Filtro Express'"
                                    :class="citaServicio === 'Cambio de Aceite y Filtro Express' ? 'bg-caribe-blueAtlantic text-white border-sky-400' : 'bg-slate-100 text-slate-700 border-slate-200 hover:bg-slate-200 dark:bg-white/5 dark:text-slate-300 dark:border-white/10 dark:hover:bg-white/10'"
                                    class="p-3.5 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>🛢️</span>
                                <span>Aceite & Filtro Express</span>
                            </button>

                            <button type="button" 
                                    @click="citaServicio = 'Diagnóstico Computarizado por Escáner'"
                                    :class="citaServicio === 'Diagnóstico Computarizado por Escáner' ? 'bg-indigo-600 text-white border-indigo-400' : 'bg-slate-100 text-slate-700 border-slate-200 hover:bg-slate-200 dark:bg-white/5 dark:text-slate-300 dark:border-white/10 dark:hover:bg-white/10'"
                                    class="p-3.5 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>💻</span>
                                <span>Escáner / Check Engine</span>
                            </button>

                            <button type="button" 
                                    @click="citaServicio = 'Revisión y Cambio de Frenos'"
                                    :class="citaServicio === 'Revisión y Cambio de Frenos' ? 'bg-amber-600 text-white border-amber-400' : 'bg-slate-100 text-slate-700 border-slate-200 hover:bg-slate-200 dark:bg-white/5 dark:text-slate-300 dark:border-white/10 dark:hover:bg-white/10'"
                                    class="p-3.5 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>🛑</span>
                                <span>Frenos & Tren Delantero</span>
                            </button>

                            <button type="button" 
                                    @click="citaServicio = 'Alineación, Balanceo y Tren Delantero'"
                                    :class="citaServicio === 'Alineación, Balanceo y Tren Delantero' ? 'bg-emerald-600 text-white border-emerald-400' : 'bg-slate-100 text-slate-700 border-slate-200 hover:bg-slate-200 dark:bg-white/5 dark:text-slate-300 dark:border-white/10 dark:hover:bg-white/10'"
                                    class="p-3.5 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>🔄</span>
                                <span>Alineación & Balanceo</span>
                            </button>

                            <button type="button" 
                                    @click="citaServicio = 'Mantenimiento de Aire Acondicionado'"
                                    :class="citaServicio === 'Mantenimiento de Aire Acondicionado' ? 'bg-rose-600 text-white border-rose-400' : 'bg-slate-100 text-slate-700 border-slate-200 hover:bg-slate-200 dark:bg-white/5 dark:text-slate-300 dark:border-white/10 dark:hover:bg-white/10'"
                                    class="p-3.5 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>❄️</span>
                                <span>Aire Acondicionado</span>
                            </button>
                        </div>
                    </div>

                    <!-- Fecha, Turno y Vehículo -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                                Fecha de Visita
                            </label>
                            <input type="date" 
                                   x-model="citaFecha" 
                                   required 
                                   class="w-full py-3 px-4 rounded-xl bg-slate-50 border border-slate-300 text-slate-800 focus:bg-white focus:border-caribe-blueAtlantic dark:bg-slate-900 dark:border-slate-700 dark:text-white text-xs font-semibold focus:border-sky-400 outline-none" />
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                                Turno Preferido
                            </label>
                            <select x-model="citaTurno" class="w-full py-3 px-4 rounded-xl bg-slate-50 border border-slate-300 text-slate-800 focus:bg-white focus:border-caribe-blueAtlantic dark:bg-slate-900 dark:border-slate-700 dark:text-white text-xs font-semibold focus:border-sky-400 outline-none">
                                <option value="Mañana (8:00 AM - 12:00 PM)">Mañana (8:00 AM - 12:00 PM)</option>
                                <option value="Tarde (1:00 PM - 5:00 PM)">Tarde (1:00 PM - 5:00 PM)</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                                Vehículo Registrado
                            </label>
                            <input type="text" 
                                   value="Toyota Corolla GLi (AB123CD)" 
                                   readonly 
                                   class="w-full py-3 px-4 rounded-xl bg-slate-100 border border-slate-200 text-slate-600 dark:bg-slate-900/60 dark:border-slate-800 dark:text-slate-400 text-xs font-bold cursor-not-allowed" />
                        </div>
                    </div>

                    <div class="pt-4 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="text-xs text-slate-500 dark:text-slate-400">
                            📍 Taller en Carretera Nacional San Juan Bautista, Sector Carapacho.
                        </span>

                        <button type="submit" 
                                class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-extrabold uppercase tracking-wider shadow-xl shadow-caribe-red/30 transition transform hover:-translate-y-0.5 cursor-pointer">
                            Confirmar Cita en Taller
                        </button>
                    </div>

                </form>

            </div>

            <!-- SECCIÓN: HISTORIAL DE SERVICIOS PREVIOS -->
            <div class="bg-white border border-slate-200 shadow-sm dark:bg-[#0A192F] dark:border-slate-800 dark:shadow-xl rounded-3xl p-8 transition-colors">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6 pb-4 border-b border-slate-100 dark:border-white/10">
                    <div>
                        <h3 class="text-xl font-black text-slate-900 dark:text-white">Historial de Órdenes de Servicio</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Intervenciones realizadas con repuestos y fluidos certificados.</p>
                    </div>
                    <span class="text-xs font-bold px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 border border-emerald-200 dark:bg-emerald-500/20 dark:text-emerald-300 dark:border-emerald-500/30">
                        Garantía Caribe Vigente
                    </span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="border-b border-slate-200 dark:border-slate-800 text-slate-500 dark:text-slate-400 font-extrabold uppercase tracking-wider text-[10px]">
                                <th class="pb-3">Nº Orden</th>
                                <th class="pb-3">Fecha</th>
                                <th class="pb-3">Servicio</th>
                                <th class="pb-3">Kilometraje</th>
                                <th class="pb-3">Insumos Utilizados</th>
                                <th class="pb-3 text-right">Estatus</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-slate-800/60 font-medium text-slate-700 dark:text-slate-300">
                            <tr>
                                <td class="py-4 font-mono font-bold text-slate-900 dark:text-white">#ORD-849</td>
                                <td class="py-4 text-slate-500 dark:text-slate-400">15/08/2026</td>
                                <td class="py-4 font-bold text-slate-900 dark:text-white">Cambio de Aceite 10W-30 & Filtro</td>
                                <td class="py-4">75,000 km</td>
                                <td class="py-4 text-slate-500 dark:text-slate-400">Motul 4100 + Filtro Sellado</td>
                                <td class="py-4 text-right">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800 dark:bg-emerald-500/20 dark:text-emerald-300 text-[10px] font-bold">
                                        Completado
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4 font-mono font-bold text-slate-900 dark:text-white">#ORD-792</td>
                                <td class="py-4 text-slate-500 dark:text-slate-400">22/04/2026</td>
                                <td class="py-4 font-bold text-slate-900 dark:text-white">Escaneo Computarizado & Afinación</td>
                                <td class="py-4">70,200 km</td>
                                <td class="py-4 text-slate-500 dark:text-slate-400">Limpieza por ultrasonido</td>
                                <td class="py-4 text-right">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800 dark:bg-emerald-500/20 dark:text-emerald-300 text-[10px] font-bold">
                                        Completado
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4 font-mono font-bold text-slate-900 dark:text-white">#ORD-710</td>
                                <td class="py-4 text-slate-500 dark:text-slate-400">10/11/2025</td>
                                <td class="py-4 font-bold text-slate-900 dark:text-white">Pastillas de Freno Delanteras</td>
                                <td class="py-4">64,500 km</td>
                                <td class="py-4 text-slate-500 dark:text-slate-400">Pastillas Cerámicas + Rectificación</td>
                                <td class="py-4 text-right">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800 dark:bg-emerald-500/20 dark:text-emerald-300 text-[10px] font-bold">
                                        Completado
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
