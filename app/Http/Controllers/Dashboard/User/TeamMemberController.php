<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
//use App\Awesome\Contracts\Controllers\User\UserContract;
use Message;

use App\TeamMember;

use App\Http\Requests\TeamMembers\CreateTeamMemberRequest;
use App\Http\Requests\TeamMembers\UpdateTeamMemberRequest;

class TeamMemberController extends Controller
{
    /**
     * The loader implementation.
     *
     * @var \App\Services\MessagesTranslator
     */
    protected $message;

    /**
     * The authenticated user.
     */
    private $user;

    private $positions;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message->setBase('messages.ctrl.teamMember');
        $this->user = auth()->user();
        $this->positions = [
            ['name' => '-'],
            ['name' => 'Ketua'],
            ['name' => 'Anggota'],
            ['name' => 'Official'],
            ['name' => 'Kapten'],
            ['name' => 'Pemain'],
        ];
    }

    /**
     * Display a listing of the team member.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return abort(404);
    }

    /**
     * Show the form for creating a new team member.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $check = $this->atLeatHasBeenRegistered();
        if ("" != $check) {
            return redirect($check);
        }
        $pageTitle = $this->message->shout('create.title');
        $positions = $this->positions;

        return view('dashboard.user.members.create', compact('pageTitle', 'positions'));
    }

    /**
     * Store a newly created team member in storage.
     *
     * @param  App\Http\Requests\TeamMembers\CreateTeammemberRequest  $request
     * @param  App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTeamMemberRequest $request, TeamMember $teamMember)
    {
        if (!$this->checkTeamMemberPositionConsistency($request)) {
            alert()->error($this->message->shout('store.error'))->persistent("Close");
            return redirect()->back();
        }

        $position = $request->get('position');
        if ($position == "-") {
            $position = "None";
        }

        $data = [
            'nim' => $request->get('nim'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'generation' => $request->get('generation'),
            'phone' => $request->get('phone'),
            'position' => $position,
            'team_id' => $this->user->id,
        ];

        $teamMember->create($data);

        alert()->success($this->message->shout('store.success'))->persistent("Close");

        return redirect('/dashboard/users');
    }

    /**
     * Display the specified team member
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified team member.
     *
     * @param  App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teamMember = $this->user->member()->findOrFail($id);

        $pageTitle = $this->message->shout('edit.title');
        $positions = $this->positions;
        if ($teamMember->position == "None") {
            $teamMember->position = "-";
        }

        return view('dashboard.user.members.edit', compact('pageTitle', 'teamMember', 'positions'));
    }

    /**
     * Update the specified team member in storage.
     *
     * @param  App\Http\Requests\TeamMembers\UpdateTeamMemberRequest  $request
     * @param  App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateTeamMemberRequest $request)
    {
        $teamMember = $this->user->member()->findOrFail($id);

        if (!$this->checkTeamMemberPositionConsistency($request)) {
            alert()->error($this->message->shout('update.error'))->persistent("Close");
            return redirect()->back();
        }

        $teamMember->update($request->all());

        alert()->success($this->message->shout('update.success'))->persistent("Close");

        return redirect('dashboard/users');
    }

    /**
     * Remove the specified team member from storage.
     *
     * @param  App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teamMember = $this->user->member()->findOrFail($id);
        $teamMember->delete();

        alert()->success($this->message->shout('destroy.success'))->persistent("Close");

        return redirect('/dashboard/users');
    }

    public function checkTeamMemberPositionConsistency($request)
    {
        foreach ($this->positions as $position) {
            if ($position['name'] == $request->get('position')) return true;
        }

        return false;
    }

    public function atLeatHasBeenRegistered()
    {
        $rs = $this->user->category()->first();

        if ($rs == null) {
            alert()->error($this->message->shout('alhbr.error'))->persistent("Close");

            return "/dashboard/competitions/register";
        }

        return "";
    }

}
