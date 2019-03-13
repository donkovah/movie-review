<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title" style="text-indent: 15px;">
            Menu
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="nav-active">
                        <a href="{{route('dashboard')}}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <span>Clients</span>
                        </a>
                        <ul class="nav nav-children">
                            @if(\Auth::user()->person->level_id > 3)
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-copy" aria-hidden="true"></i>
                                    <span>Clients</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="{{route('client.create')}}">
                                             New Client
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('client.index')}}">
                                             View All
                                        </a>
                                    </li>
                                    {{--<!-- <li>
                                        <a href="{{route('client.manager')}}">
                                            Client Manager
                                        </a>
                                    </li> -->--}}
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                    <span>Contracts</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="{{route('contract.create')}}">
                                             New Contract
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('contract.index')}}">
                                             List All
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @endif

                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                    <span>Instruction</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="{{route('instruction.create')}}">
                                             New Instruction
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('instruction.param', ['query'=> 'manager'])}}">
                                            Instructions Manager
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('instruction.param', ['query'=> 'pending'])}}">
                                            Pending
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('instruction.param', ['query'=> 'ongoing'])}}">
                                            Ongoing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('instruction.param', ['query'=> 'completed'])}}">
                                            Completed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('instruction.param', ['query'=> 'inactive'])}}">
                                            Inactive
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('instruction.index')}}">
                                             List All
                                        </a>
                                    </li>{{--
                                    <li>
                                        <a href="{{route('instruction.viewDeleted')}}">
                                            Deleted
                                        </a>
                                    </li>--}}
                                </ul>
                            </li>

                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                    <span>Tasks</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="{{route('task.param', ['query'=> 'awaiting-review'])}}">
                                            Awaiting Review
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="{{route('task.param', ['query'=> 'task-manager'])}}">
                                             Task Manager
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('task.create')}}">
                                             New
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('task.index')}}">
                                            All
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('task.param', ['query' => 'pending'])}}">
                                            Pending
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('task.param', ['query' => 'ongoing'])}}">
                                            Ongoing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('task.param', ['query' => 'completed'])}}">
                                             Completed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('task.param', ['query' => 'overdue'])}}">
                                             Overdue
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <span>Documents</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="{{route('document.create')}}">
                                     New Document
                                </a>


                            </li>
                            <li>
                                <a href="{{route('document.index')}}">
                                     List All
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <span>Finances</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="nav-parent">
                                <a>
                                     Revenues
                                </a>
                                <ul class="nav nav-children">
                                    <li class="nav-parent">
                                        <a>
                                             Payments
                                        </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a href="{{route('payment.param', ['param' => 'pending'])}}">
                                                        Pending
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('payment.param', ['param' => 'ongoing'])}}">
                                                        Ongoing
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('payment.param', ['param' => 'overdue'])}}">
                                                        Overdue
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('payment.param', ['param' => 'complete'])}}">
                                                        Complete
                                                    </a>
                                                </li>
                                            </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            Feenotes
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="{{route('feenote.param', ['param'=> 'pending'])}}">
                                                    Pending
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('feenote.param', ['param' => 'paid'])}}">
                                                    Paid
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('recievable.index')}}">
                                            Recievables
                                        </a>
                                    </li>
                                </ul>
                            <li class="nav-parent">
                                <a>
                                     Budgets
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="{{route('budget.create')}}">
                                            New
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('budget.index')}}">
                                            List
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                     Cashbook
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="{{route('cashbook.param.entry', ['param' => 'debit'])}}">
                                                Debit Entry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('cashbook.param.entry', ['param' => 'credit'])}}">
                                                Credit Entry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('cashbook.index')}}">
                                            View
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            </li>
                            <li>
                                <a href="{{route('bank.create')}}">
                                    Banks
                                </a>
                            </li>
                            <li>
                                <a href="{{route('financial.summary')}}">
                                    Financial Summary
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Staff</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="{{route('profile.create')}}">
                                     New
                                </a>
                            </li>
                            <li>
                                <a href="{{route('profile.index')}}">
                                     List All
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Logs</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="{{route('log.param', ['param' => 'client'])}}">
                                     Client
                                </a>
                            </li>
                            <li>
                                <a href="{{route('log.param', ['param' => 'contract'])}}">
                                     Contract
                                </a>
                            </li>
                            <li>
                                <a href="{{route('log.param', ['param' => 'instruction'])}}">
                                     Instruction
                                </a>
                            </li>
                            <li>
                                <a href="{{route('log.param', ['param' => 'task'])}}">
                                     Task
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Conversations</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="{{route('conversation.index', ['type' => 'private'])}}">
                                     Private
                                </a>
                            </li>
                            <li>
                                <a href="{{route('conversation.index', ['type' => 'group'])}}">
                                     Group
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('calendar.index')}}">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <hr class="separator" />

            <div class="sidebar-widget widget-tasks">
                <div class="widget-header">
                    <h6>Settings</h6>
                    <div class="widget-toggle">+</div>
                </div>
                <div class="widget-content">
                    <ul class="list-unstyled m-none">
                        <li><a href="{{route('profile.show', ['profile' => \Auth::user()->person->slug])}}">Profile</a></li>
                        <li><a href="{{route('change.password')}}">Change Password</a></li>
                        <li>
                            <a  href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> {{ __('Logout') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>                
        </div>

    </div>

</aside>
<!-- end: sidebar -->
