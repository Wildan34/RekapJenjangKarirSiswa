import { InfoIcon } from 'lucide-react';
import { Alert, AlertDescription } from '@/components/ui/alert';
import type { TeamInvitationContext } from '@/types';

type Props = {
    invitation: TeamInvitationContext;
    action: 'Log in' | 'Register';
};

export default function TeamInvitationAlert({ invitation, action }: Props) {
    return (
        <Alert
            data-test="team-invitation-alert"
            className="border-blue-200 bg-blue-50 text-blue-900 [&>svg]:text-blue-600"
        >
            <InfoIcon />
            <AlertDescription className="text-blue-900">
                {action} to join the "{invitation.teamName}" team.
            </AlertDescription>
        </Alert>
    );
}
