<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-caribe-redLight text-caribe-red text-[11px] font-bold tracking-wider uppercase mb-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-caribe-red"></span>
                    Panel de Control Vehicular
                </div>
                <h1 class="text-2xl font-black text-slate-900 tracking-tight">
                    Hola, {{ Auth::user()->name }} 👋
                </h1>
                <p class="text-xs sm:text-sm text-slate-500">
                    Monitoreo en tiempo real, alertas de mantenimiento preventivo y citas en Multiservicios Caribe Atlántico.
                </p>
            </div>

            <!-- Botones de Acción Rápida -->
            <div class="flex items-center gap-2">
                <a href="#agendar-cita" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-bold shadow-md shadow-caribe-red/20 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>Agendar Cita en Taller</span>
                </a>

                <a href="#tarjeta-vida" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 text-xs font-bold shadow-xs transition-all">
                    <svg class="w-4 h-4 text-caribe-blueAtlantic" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>Ver Ficha Vehicular</span>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8" x-data="{ 
        odometro: 78750, 
        nuevoKm: '',
        actualizarKm() {
            if(this.nuevoKm && this.nuevoKm > this.odometro) {
                this.odometro = parseInt(this.nuevoKm);
                this.nuevoKm = '';
                alert('¡Kilometraje actualizado correctamente en tu Tarjeta de Vida Vehicular!');
            }
        },
        citaEnviada: false,
        citaServicio: 'Mantenimiento Preventivo Integral',
        citaFecha: '{{ date('Y-m-d', strtotime('+2 days')) }}',
        citaTurno: 'Mañana (8:00 AM - 12:00 PM)',
        citaNotas: '',
        agendar() {
            this.citaEnviada = true;
        }
    }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            <!-- Fila de Métricas Principales (KPIs) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <!-- Métrica 1: Salud Vehicular -->
                <div class="bg-white p-5 rounded-2xl border border-slate-200/90 shadow-xs hover:shadow-md transition-all">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Salud del Vehículo</span>
                        <span class="w-8 h-8 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-xs border border-emerald-100">
                            94%
                        </span>
                    </div>
                    <div class="text-2xl font-black text-slate-900">Estado Óptimo</div>
                    <p class="text-xs text-slate-500 mt-1">Toyota Corolla 2018 • Placa AB123CD</p>
                    <div class="w-full bg-slate-100 rounded-full h-1.5 mt-3 overflow-hidden">
                        <div class="bg-emerald-500 h-1.5 rounded-full" style="width: 94%"></div>
                    </div>
                </div>

                <!-- Métrica 2: Próximo Mantenimiento Preventivo -->
                <div class="bg-white p-5 rounded-2xl border border-caribe-red/30 shadow-xs hover:shadow-md transition-all relative overflow-hidden">
                    <div class="absolute -right-6 -bottom-6 w-20 h-20 bg-caribe-red/5 rounded-full pointer-events-none"></div>
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-caribe-red">Alerta Preventiva</span>
                        <span class="px-2 py-0.5 rounded-md bg-caribe-redLight text-caribe-red text-[11px] font-bold">
                            Pronto
                        </span>
                    </div>
                    <div class="text-2xl font-black text-caribe-red">En 1,250 km</div>
                    <p class="text-xs text-slate-600 mt-1">Cambio de Aceite 10W-30 & Filtro</p>
                    <div class="w-full bg-slate-100 rounded-full h-1.5 mt-3 overflow-hidden">
                        <div class="bg-caribe-red h-1.5 rounded-full" style="width: 82%"></div>
                    </div>
                </div>

                <!-- Métrica 3: Citas en Taller -->
                <div class="bg-white p-5 rounded-2xl border border-slate-200/90 shadow-xs hover:shadow-md transition-all">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Cita Agendada</span>
                        <span class="w-8 h-8 rounded-xl bg-sky-50 text-caribe-blueAtlantic flex items-center justify-center border border-sky-100">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </span>
                    </div>
                    <div class="text-2xl font-black text-slate-900">Jueves, 10:00 AM</div>
                    <p class="text-xs text-caribe-blueNavy font-medium mt-1">Revisión Preventiva & Frenos</p>
                    <div class="mt-3 flex items-center gap-1.5 text-[11px] text-emerald-600 font-semibold">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        Turno Confirmado en Recinto
                    </div>
                </div>

                <!-- Métrica 4: Historial en Recinto -->
                <div class="bg-white p-5 rounded-2xl border border-slate-200/90 shadow-xs hover:shadow-md transition-all">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Servicios Realizados</span>
                        <span class="w-8 h-8 rounded-xl bg-slate-100 text-slate-700 flex items-center justify-center font-bold text-xs">
                            6
                        </span>
                    </div>
                    <div class="text-2xl font-black text-slate-900">100% Garantía</div>
                    <p class="text-xs text-slate-500 mt-1">Fluidos & Repuestos Originales</p>
                    <div class="mt-3 text-[11px] text-caribe-blueAtlantic font-semibold flex items-center gap-1">
                        <span>Ver historial de facturas</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- SECCIÓN DESTACADA: TARJETA DE VIDA VEHICULAR PERSONALIZADA -->
            <div id="tarjeta-vida" class="bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden">
                <!-- Header de la Ficha / Pasaporte -->
                <div class="bg-gradient-to-r from-caribe-blueDeep via-caribe-blue to-caribe-blueNavy p-6 sm:p-8 text-white relative">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 relative z-10">
                        <div>
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-xs font-semibold text-white/90 border border-white/10 mb-3">
                                <span class="w-2 h-2 rounded-full bg-caribe-red animate-pulse"></span>
                                Pasaporte Automotriz Digital Oficial
                            </div>
                            <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-white">
                                Tarjeta de Vida Vehicular
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-300 mt-1">
                                Registro biométrico del desgaste mecánico y cronograma de mantenimiento preventivo.
                            </p>
                        </div>

                        <!-- Badge del Vehículo Vinculado -->
                        <div class="bg-white/10 backdrop-blur-md border border-white/15 p-4 rounded-2xl flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-caribe-red flex items-center justify-center text-white font-black text-lg shadow-inner">
                                🚗
                            </div>
                            <div>
                                <div class="text-xs text-slate-300 font-medium">Vehículo Principal</div>
                                <div class="text-base font-black text-white">Toyota Corolla GLi 1.8L</div>
                                <div class="flex items-center gap-3 text-xs mt-0.5">
                                    <span class="px-2 py-0.5 rounded bg-white text-slate-900 font-mono font-bold">PLACA: AB123CD</span>
                                    <span class="text-slate-300">Año: 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Datos Rápidos de Odómetro -->
                    <div class="mt-6 pt-6 border-t border-white/10 grid grid-cols-2 sm:grid-cols-4 gap-4 text-xs">
                        <div>
                            <span class="text-slate-400 block font-medium">Odómetro Actual:</span>
                            <span class="text-base font-black text-white" x-text="odometro.toLocaleString() + ' km'">78,750 km</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block font-medium">Último Servicio en Taller:</span>
                            <span class="text-sm font-bold text-white">75,000 km (Hace 3 meses)</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block font-medium">Próximo Cambio de Aceite:</span>
                            <span class="text-sm font-bold text-caribe-redLight">80,000 km</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block font-medium">Técnico Certificado:</span>
                            <span class="text-sm font-bold text-white">Ing. Taller Caribe</span>
                        </div>
                    </div>
                </div>

                <!-- Cuerpo de la Tarjeta de Vida: Semáforo y Barras de Desgaste -->
                <div class="p-6 sm:p-8 space-y-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <div>
                            <h3 class="text-lg font-black text-slate-900">Estado Preventivo de Componentes Críticos</h3>
                            <p class="text-xs text-slate-500">Estimación basada en kilometraje, tiempo de uso y condiciones de manejo en Margarita.</p>
                        </div>
                        <!-- Actualizador de Km -->
                        <div class="flex items-center gap-2">
                            <input type="number" 
                                   x-model="nuevoKm" 
                                   placeholder="Nuevo kilometraje..." 
                                   class="text-xs py-1.5 px-3 border border-slate-300 rounded-lg w-36 focus:ring-1 focus:ring-caribe-blueAtlantic" />
                            <button @click="actualizarKm()" 
                                    class="text-xs font-bold px-3 py-1.5 bg-slate-800 hover:bg-slate-900 text-white rounded-lg transition">
                                Actualizar
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                        <!-- Componente 1: Aceite de Motor -->
                        <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:border-caribe-red/40 transition-all">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-8 h-8 rounded-lg bg-red-100 text-caribe-red flex items-center justify-center font-bold text-sm">🛢️</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-800">Aceite de Motor (10W-30)</h4>
                                        <p class="text-[11px] text-slate-500">Semi-Sintético • Filtro Sellado</p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-caribe-red">82% Vida</span>
                            </div>
                            <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden my-2">
                                <div class="bg-caribe-red h-2 rounded-full" style="width: 82%"></div>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-slate-600">
                                <span>Restan: ~1,250 km</span>
                                <span class="font-semibold text-caribe-red">Mantenimiento próximo</span>
                            </div>
                        </div>

                        <!-- Componente 2: Sistema de Frenos -->
                        <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:border-caribe-blueAtlantic/40 transition-all">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-8 h-8 rounded-lg bg-sky-100 text-caribe-blueAtlantic flex items-center justify-center font-bold text-sm">🛑</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-800">Pastillas & Discos de Freno</h4>
                                        <p class="text-[11px] text-slate-500">Grosor de pasta: 7.5 mm</p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-caribe-blueAtlantic">65% Vida</span>
                            </div>
                            <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden my-2">
                                <div class="bg-caribe-blueAtlantic h-2 rounded-full" style="width: 65%"></div>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-slate-600">
                                <span>Restan: ~6,500 km</span>
                                <span class="font-semibold text-emerald-600">Condición segura</span>
                            </div>
                        </div>

                        <!-- Componente 3: Refrigerante -->
                        <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:border-emerald-300 transition-all">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm">❄️</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-800">Líquido Refrigerante</h4>
                                        <p class="text-[11px] text-slate-500">Coolant 50/50 Orgánico</p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-emerald-600">90% Vida</span>
                            </div>
                            <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden my-2">
                                <div class="bg-emerald-500 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-slate-600">
                                <span>Nivel óptimo</span>
                                <span class="font-semibold text-emerald-600">Excelente</span>
                            </div>
                        </div>

                        <!-- Componente 4: Alineación y Balanceo -->
                        <div class="p-4 rounded-2xl border border-amber-200 bg-amber-50/30 hover:bg-white transition-all">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-8 h-8 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-sm">🔄</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-800">Alineación & Rotación</h4>
                                        <p class="text-[11px] text-slate-500">Tren delantero y balanceo</p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-amber-600">35% Vida</span>
                            </div>
                            <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden my-2">
                                <div class="bg-amber-500 h-2 rounded-full" style="width: 35%"></div>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-slate-600">
                                <span>Restan: ~800 km</span>
                                <span class="font-semibold text-amber-600">Agendar chequeo</span>
                            </div>
                        </div>

                        <!-- Componente 5: Batería y Sistema Eléctrico -->
                        <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white transition-all">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">⚡</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-800">Batería & Alternador</h4>
                                        <p class="text-[11px] text-slate-500">12.6V Reposo • 14.1V Carga</p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-blue-600">92% Salud</span>
                            </div>
                            <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden my-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 92%"></div>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-slate-600">
                                <span>Excelente arranque</span>
                                <span class="font-semibold text-emerald-600">Al día</span>
                            </div>
                        </div>

                        <!-- Componente 6: Filtros de Aire & Cabina -->
                        <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white transition-all">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-8 h-8 rounded-lg bg-teal-100 text-teal-700 flex items-center justify-center font-bold text-sm">💨</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-slate-800">Filtros de Aire y Cabina</h4>
                                        <p class="text-[11px] text-slate-500">Admisión limpia de motor</p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-teal-600">78% Vida</span>
                            </div>
                            <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden my-2">
                                <div class="bg-teal-500 h-2 rounded-full" style="width: 78%"></div>
                            </div>
                            <div class="flex items-center justify-between text-[11px] text-slate-600">
                                <span>Restan: ~4,200 km</span>
                                <span class="font-semibold text-emerald-600">Normal</span>
                            </div>
                        </div>
                    </div>

                    <!-- Diagnóstico Técnico Profesional -->
                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-caribe-blueNavy text-white flex items-center justify-center shrink-0 font-black text-xs">
                                i
                            </div>
                            <div>
                                <h5 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Recomendación Preventiva de Taller Caribe</h5>
                                <p class="text-xs text-slate-600 mt-0.5">
                                    "Tu Toyota Corolla tiene un rendimiento excelente. Sugerimos agendar en las próximas 2 semanas la alineación y rotación preventiva para asegurar un desgaste parejo de neumáticos y agendar el cambio de aceite preventivo a los 80,000 km."
                                </p>
                            </div>
                        </div>
                        <a href="#agendar-cita" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-caribe-blueNavy hover:bg-caribe-blue text-white text-xs font-bold shrink-0 transition">
                            <span>Agendar Servicio Recomendado</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- SECCIÓN: AGENDAR CITA EN EL TALLER MECÁNICO -->
            <div id="agendar-cita" class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 sm:p-8">
                <div class="max-w-3xl mb-6">
                    <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-caribe-redLight text-caribe-red text-[11px] font-bold tracking-wider uppercase mb-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-caribe-red"></span>
                        Reserva Online Prioritaria
                    </div>
                    <h3 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">
                        Agendar Cita en el Taller Mecánico
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        Selecciona el servicio que requiere tu vehículo. Recibirás confirmación técnica y asignación de puesto en nuestro taller en San Juan Bautista.
                    </p>
                </div>

                <!-- Mensaje de Cita Agendada Exitosamente -->
                <div x-show="citaEnviada" 
                     x-transition 
                     class="mb-6 p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0 font-bold text-lg">
                            ✓
                        </div>
                        <div class="flex-1">
                            <h4 class="text-base font-bold text-emerald-900">¡Cita Solicitada con Éxito en Caribe Atlántico!</h4>
                            <p class="text-xs text-emerald-800 mt-1">
                                Tu solicitud para <strong x-text="citaServicio"></strong> el día <strong x-text="citaFecha"></strong> (<span x-text="citaTurno"></span>) ha sido registrada con el código <strong>#CITA-2026-8842</strong>.
                            </p>
                            <div class="mt-4 flex flex-wrap items-center gap-3">
                                <a :href="'https://wa.me/584122050350?text=' + encodeURIComponent('Hola Multiservicios Caribe Atlántico, he agendado una cita para mi vehículo Toyota Corolla AB123CD para el servicio de: ' + citaServicio + ' el día ' + citaFecha + '. Código: #CITA-2026-8842')" 
                                   target="_blank" 
                                   class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold shadow-sm transition">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.674zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                                    </svg>
                                    <span>Confirmar Inmediato por WhatsApp</span>
                                </a>
                                <button @click="citaEnviada = false" class="text-xs font-semibold text-slate-600 hover:text-slate-900 underline">
                                    Agendar otra cita
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulario de Agendamiento -->
                <form @submit.prevent="agendar()" x-show="!citaEnviada" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                        <!-- Servicio -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Tipo de Servicio en Taller
                            </label>
                            <select x-model="citaServicio" class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none">
                                <option value="Mantenimiento Preventivo Integral">🛠️ Mantenimiento Preventivo Integral</option>
                                <option value="Cambio de Aceite y Filtro Express">🛢️ Cambio de Aceite y Filtro Express</option>
                                <option value="Diagnóstico Computarizado por Escáner">💻 Diagnóstico Computarizado por Escáner</option>
                                <option value="Revisión y Cambio de Frenos">🛑 Revisión y Cambio de Frenos</option>
                                <option value="Alineación, Balanceo y Tren Delantero">🔄 Alineación, Balanceo y Tren Delantero</option>
                                <option value="Mantenimiento de Aire Acondicionado">❄️ Mantenimiento de Aire Acondicionado</option>
                                <option value="Mecánica General de Motor y Caja">⚙️ Mecánica General de Motor y Caja</option>
                            </select>
                        </div>

                        <!-- Fecha -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Fecha Deseada
                            </label>
                            <input type="date" 
                                   x-model="citaFecha" 
                                   required 
                                   class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" />
                        </div>

                        <!-- Turno -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Turno de Atención
                            </label>
                            <select x-model="citaTurno" class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none">
                                <option value="Mañana (8:00 AM - 12:00 PM)">Mañana (8:00 AM - 12:00 PM)</option>
                                <option value="Tarde (1:00 PM - 5:00 PM)">Tarde (1:00 PM - 5:00 PM)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Vehículo Seleccionado y Notas -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Vehículo a Ingresar
                            </label>
                            <input type="text" 
                                   value="Toyota Corolla GLi 2018 (Placa: AB123CD)" 
                                   readonly 
                                   class="w-full text-xs font-bold text-slate-700 py-2.5 px-3 bg-slate-100 border border-slate-200 rounded-xl cursor-not-allowed" />
                        </div>

                        <div class="sm:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Síntomas o Solicitud Específica (Opcional)
                            </label>
                            <input type="text" 
                                   x-model="citaNotas" 
                                   placeholder="Ej. Siento leve vibración al frenar o deseo cambio de aceite sintético..." 
                                   class="w-full text-xs py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" />
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-2">
                        <div class="flex items-center gap-2 text-xs text-slate-500">
                            <svg class="w-4 h-4 text-caribe-blueAtlantic" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Te esperamos en Carretera Nacional San Juan Bautista, Sector Carapacho.</span>
                        </div>

                        <button type="submit" 
                                class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-bold shadow-md shadow-caribe-red/20 transition-all cursor-pointer">
                            <span>Confirmar Cita en Taller</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <!-- SECCIÓN: HISTORIAL DE SERVICIOS EN EL RECINTO -->
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 sm:p-8">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <h3 class="text-xl font-black text-slate-900 tracking-tight">Historial de Órdenes de Servicio</h3>
                        <p class="text-xs text-slate-500">Registro histórico de cada intervención realizada en nuestro taller mecánico.</p>
                    </div>
                    <span class="text-xs font-semibold px-3 py-1 bg-slate-100 text-slate-700 rounded-lg">
                        Garantía de Servicio Vigente
                    </span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="border-b border-slate-200 text-slate-400 font-bold uppercase tracking-wider text-[10px]">
                                <th class="pb-3">Nº Orden</th>
                                <th class="pb-3">Fecha</th>
                                <th class="pb-3">Servicio Realizado</th>
                                <th class="pb-3">Kilometraje</th>
                                <th class="pb-3">Repuestos / Fluidos</th>
                                <th class="pb-3 text-right">Estatus</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 font-medium text-slate-700">
                            <tr>
                                <td class="py-3.5 font-mono font-bold text-slate-900">#ORD-849</td>
                                <td class="py-3.5 text-slate-500">15/08/2026</td>
                                <td class="py-3.5 font-bold text-slate-900">Cambio de Aceite 10W-30 & Filtro</td>
                                <td class="py-3.5">75,000 km</td>
                                <td class="py-3.5 text-slate-500">Lubricante Semi-Sintético + Filtro Sellado</td>
                                <td class="py-3.5 text-right">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">
                                        Completado
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3.5 font-mono font-bold text-slate-900">#ORD-792</td>
                                <td class="py-3.5 text-slate-500">22/04/2026</td>
                                <td class="py-3.5 font-bold text-slate-900">Escaneo Computarizado & Afinación</td>
                                <td class="py-3.5">70,200 km</td>
                                <td class="py-3.5 text-slate-500">Limpieza de inyectores por ultrasonido</td>
                                <td class="py-3.5 text-right">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">
                                        Completado
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3.5 font-mono font-bold text-slate-900">#ORD-710</td>
                                <td class="py-3.5 text-slate-500">10/11/2025</td>
                                <td class="py-3.5 font-bold text-slate-900">Pastillas de Freno Delanteras</td>
                                <td class="py-3.5">64,500 km</td>
                                <td class="py-3.5 text-slate-500">Pastillas Cerámicas + Rectificación de Discos</td>
                                <td class="py-3.5 text-right">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">
                                        Completado
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- SECCIÓN: NOVEDADES DEL RECINTO Y STOCK -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 bg-gradient-to-br from-caribe-blueDeep to-caribe-blue rounded-3xl text-white flex flex-col justify-between">
                    <div>
                        <span class="px-2.5 py-1 rounded-full bg-white/10 text-white text-[10px] font-bold uppercase tracking-wider">
                            Stock en Recinto
                        </span>
                        <h4 class="text-lg font-black mt-3">Lubricantes Premium Disponibles</h4>
                        <p class="text-xs text-slate-300 mt-2">
                            Llegó lote fresco de aceites sintéticos y minerales: Motul, Castrol, Mobil e Inca en todas las viscosidades para tu cambio express.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-white/10 flex items-center justify-between text-xs">
                        <span class="font-bold text-caribe-redLight">Cambio en fosa incluido</span>
                        <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" class="text-white hover:underline font-semibold">Consultar stock →</a>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-3xl border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <span class="px-2.5 py-1 rounded-full bg-caribe-redLight text-caribe-red text-[10px] font-bold uppercase tracking-wider">
                            Servicio Especial
                        </span>
                        <h4 class="text-lg font-black text-slate-900 mt-3">Chequeo Integral Pre-Viaje</h4>
                        <p class="text-xs text-slate-600 mt-2">
                            ¿Vas a salir de la Isla o recorrer Margarita? Realizamos inspección de 21 puntos vitales: fluidos, frenos, tren delantero y sistema eléctrico.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="font-bold text-caribe-red">En solo 35 minutos</span>
                        <a href="#agendar-cita" class="text-caribe-blueNavy hover:underline font-bold">Agendar →</a>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-3xl border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <span class="px-2.5 py-1 rounded-full bg-sky-100 text-caribe-blueAtlantic text-[10px] font-bold uppercase tracking-wider">
                            Comunidad
                        </span>
                        <h4 class="text-lg font-black text-slate-900 mt-3">Síguenos en Instagram</h4>
                        <p class="text-xs text-slate-600 mt-2">
                            Conoce trabajos en taller, tips de mantenimiento vehicular y ofertas exclusivas para miembros en <strong>@mscaribeatlantico</strong>.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="font-bold text-slate-700">San Juan Bautista</span>
                        <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" class="text-caribe-red hover:underline font-bold">Visitar Instagram →</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
